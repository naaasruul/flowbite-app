<x-layouts.app :title="__('Payment Status')">
    <div class="min-h-screen bg-gray-50">
        <!-- Header -->
        @php
            $statusConfig = match ($order->payment_status) {
                'paid' => [
                    'text' => 'Delivered', 
                    'bg' => 'bg-green-500', 
                    'icon' => '✅',
                    'headerGradient' => 'bg-gradient-to-r from-green-600 to-emerald-700',
                    'borderColor' => 'border-green-300',
                    'textColor' => 'text-green-100'
                ],
                'failed' => [
                    'text' => 'Failed', 
                    'bg' => 'bg-red-500', 
                    'icon' => '❌',
                    'headerGradient' => 'bg-gradient-to-r from-red-600 to-red-700',
                    'borderColor' => 'border-red-300',
                    'textColor' => 'text-red-100'
                ],
                default => [
                    'text' => 'Processing', 
                    'bg' => 'bg-gray-500', 
                    'icon' => '⏳',
                    'headerGradient' => 'bg-gradient-to-r from-gray-600 to-slate-700',
                    'borderColor' => 'border-gray-300',
                    'textColor' => 'text-gray-100'
                ],
            };
        @endphp
        <div class="{{ $statusConfig['headerGradient'] }} text-white rounded-lg">
            <div class="container mx-auto p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold mb-2">Order #{{ $order->id }}</h1>
                        <p class="{{ $statusConfig['textColor'] }}">Placed on {{ $order->created_at->format('M d, Y') }}</p>
                    </div>
                    <div class="text-right">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl">{{ $statusConfig['icon'] }}</span>
                            <div>
                                <div class="flex justify-end">
                                    <div class="px-4 py-2 {{ $statusConfig['bg'] }} rounded-full text-white font-semibold w-max">
                                        {{ $statusConfig['text'] }}
                                    </div>
                                </div>
                                <p class="{{ $statusConfig['textColor'] }} text-sm mt-1">Current Status</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    
                    <!-- Payment Status Section -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-lg font-semibold mb-6 flex items-center">
                            <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                            Payment Status
                        </h2>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 rounded-full flex items-center justify-center text-2xl
                                        {{ match($order->payment_status) {
                                            'paid' => 'bg-green-100 text-green-600',
                                            'pending' => 'bg-yellow-100 text-yellow-600',
                                            'failed' => 'bg-red-100 text-red-600',
                                            default => 'bg-gray-100 text-gray-600'
                                        } }}">
                                        {{ match($order->payment_status) {
                                            'paid' => '💰',
                                            'pending' => '⏳',
                                            'failed' => '❌',
                                            default => '❓'
                                        } }}
                                    </div>
                                    <div>
                                        <p class="text-xl font-bold
                                            {{ match($order->payment_status) {
                                                'paid' => 'text-green-600',
                                                'pending' => 'text-yellow-600',
                                                'failed' => 'text-red-600',
                                                default => 'text-gray-600'
                                            } }}">
                                            {{ match($order->payment_status) {
                                                'paid' => 'Payment Successful',
                                                'pending' => 'Payment Pending',
                                                'failed' => 'Payment Failed',
                                                default => 'Unknown Status'
                                            } }}
                                        </p>
                                        @php
                                            $items = json_decode($order->items, true);
                                            $paymentMethod = $items['payment_method'] ?? 'Credit Card';
                                        @endphp
                                        @if($order->payment_status == 'paid')
                                            <p class="text-gray-600 mt-1">Paid by {{ $paymentMethod }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl font-bold text-gray-900">RM{{ number_format($order->total, 2) }}</p>
                                    <p class="text-gray-500 text-sm">Total Amount</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Section -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-lg font-semibold mb-6 flex items-center">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                            Product
                        </h2>
                        
                        <!-- Seller Information -->
                        <div class="mb-6 bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                                    {{ substr(optional($order->seller)->name ?? 'N', 0, 1) }}
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">{{ optional($order->seller)->name ?? 'N/A' }}</p>
                                    <p class="text-gray-600 text-sm">{{ optional($order->seller)->phone_number ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Product Items -->
                        @php
                            $cartItems = $items['cart_items'] ?? [];
                            $shippingTotal = $items['shipping_total'] ?? 0;
                        @endphp
                        
                        <div class="space-y-4">
                            @foreach($cartItems as $productId => $item)
                                @php
                                    $product = \App\Models\Product::find($productId);
                                @endphp
                                <div class="flex items-start p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                    <div class="w-20 h-20 bg-white rounded-lg overflow-hidden shadow-sm mr-4">
                                        <img src="{{ asset('storage/' . $item['image']) }}" 
                                             alt="{{ $item['name'] }}" 
                                             class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">{{ $item['name'] }}</h3>
                                        <p class="text-gray-600 text-sm mb-2 leading-relaxed">
                                            {{ $product->description ?? 'No description available' }}
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                                Quantity: {{ $item['quantity'] }}
                                            </span>
                                            <span class="font-bold text-gray-900 text-lg">RM{{ number_format($item['price'], 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Shipping Fee -->
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between bg-blue-50 rounded-lg p-4">
                                <div class="flex items-center">
                                    <span class="text-xl mr-3">🚚</span>
                                    <div>
                                        <p class="font-semibold text-gray-900">Shipping Fee</p>
                                        <p class="text-gray-600 text-sm"></p>
                                    </div>
                                </div>
                                <p class="text-lg font-bold text-gray-900">RM{{ number_format($shippingTotal, 2) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    
                    <!-- Delivery Information Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="font-semibold mb-4 flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            Delivery Information
                        </h3>
                        
                        <!-- Buyer Details -->
                        <div class="mb-6">
                            <h4 class="text-sm font-medium text-gray-700 mb-3">Buyer Details</h4>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Name</p>
                                    <p class="font-medium text-gray-900">{{ optional($order->buyer)->name ?? 'N/A' }}</p>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Phone Number</p>
                                    <p class="font-medium text-gray-900">{{ optional($order->buyer)->phone_number ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Address -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-700 mb-3">Delivery Address</h4>
                            @php
                                $address_id = $items['delivery_address_id'] ?? null;
                                $address = \App\Models\DeliveryAddress::find($address_id);
                            @endphp
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-start">
                                    <span class="text-lg mr-3 mt-1">📍</span>
                                    <p class="text-gray-700 leading-relaxed text-sm">
                                        {{ $address ? implode(', ', array_filter([
                                            $address->address_line_1,
                                            $address->address_line_2,
                                            $address->city,
                                            $address->state,
                                            $address->postal_code
                                        ])) : 'No address provided' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Information Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                        <h3 class="font-semibold mb-4 flex items-center">
                            <span class="w-2 h-2 bg-orange-600 rounded-full mr-3"></span>
                            Order Information
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <span class="text-xl mr-3">📋</span>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Order ID</p>
                                    <p class="font-bold text-gray-900">#{{ $order->id }}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xl mr-3">📅</span>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Order Date & Time</p>
                                    <p class="font-medium text-gray-900">{{ $order->created_at->format('M d, Y') }}</p>
                                    <p class="text-gray-600 text-xs">{{ $order->created_at->format('g:i A') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Summary Card -->
                    <div class="{{ $statusConfig['headerGradient'] }} text-white rounded-xl p-6">
                        <h3 class="font-semibold mb-3">Order Summary</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-blue-100">Subtotal</span>
                                <span>RM{{ number_format($order->total - $shippingTotal, 2) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-blue-100">Shipping</span>
                                <span>RM{{ number_format($shippingTotal, 2) }}</span>
                            </div>
                            <div class="border-t {{ $statusConfig['borderColor'] }} pt-2 mt-3">
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold">Total</span>
                                    <span class="text-xl font-bold">RM{{ number_format($order->total, 2) }}</span>
                                </div>
                                <p class="text-blue-100 text-xs mt-1">
                                    {{ $order->payment_status == 'paid' ? 'Payment Completed' : ($order->payment_status == 'pending' ? 'Payment Pending' : ($order->payment_status == 'cancelled' ? 'Order Cancelled' : '')) }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    {{-- <div class="space-y-3">
                        <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md">
                            Download Receipt
                        </button>
                        
                        <button class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-medium py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md">
                            Contact Support
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>