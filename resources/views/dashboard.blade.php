@extends('layouts.app')

@section('title', 'SerendibMade - Dashboard')

@section('content')
<div class="flex h-screen bg-gray-50">
    <!-- Sidebar -->
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64 bg-[#007D7D] border-r border-[#006666]">
            <!-- Enhanced Logo -->
            <div class="flex items-center justify-center h-20 px-4 border-b border-[#006666] bg-[#006666]">
                <a href="/" class="flex items-center space-x-2">
                    <img 
                        src="{{ asset('Images_used/homepage_images/SERENDIB-Made(1).png') }}" 
                        alt="SerendibMade Logo"
                        class="h-12 w-auto"
                    >
                    <div class="text-2xl font-bold">
                        <span style="font-family: 'Cinzel Decorative', serif; color: white">SERENDIB</span>
                        <span style="font-family: 'Raleway', sans-serif; color: #d1e0e0">MADE</span>
                    </div>
                </a>
            </div>
            
            <!-- Navigation -->
            <div class="flex flex-col flex-grow px-4 py-6 overflow-y-auto space-y-2">
                @auth
                <div class="space-y-1">
                    @if(Auth::user()->role === 'admin')
                        <!-- Admin Links -->
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-white bg-[#006666] rounded-lg group">
                            <svg class="w-5 h-5 mr-3 text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            Dashboard
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            Products
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Artisans
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Reviews
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Orders
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Analytics
                        </a>
                    @elseif(Auth::user()->role === 'artisan')
                        <!-- Artisan Links -->
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-white bg-[#006666] rounded-lg">
                            <svg class="w-5 h-5 mr-3 text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            Dashboard
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            My Products
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            My Orders
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-200 hover:text-white hover:bg-[#006666] rounded-lg group transition-colors">
                            <svg class="w-5 h-5 mr-3 group-hover:text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Analytics
                        </a>
                    @endif
                </div>
                @endauth
            </div>
            
            <!-- User Profile -->
            @auth
            <div class="p-4 border-t border-[#006666] bg-[#006666]">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-[#8bd3d3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                        <p class="text-xs font-medium text-[#8bd3d3]">{{ ucfirst(Auth::user()->role) }}</p>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Top Navigation -->
        <div class="bg-white border-b border-gray-200">
            <div class="px-6 py-4 flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    @auth
                    <span class="text-gray-700">Welcome back, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-[#007D7D] transition flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                @auth
                    @if(Auth::user()->role === 'admin')
                        <!-- Admin Dashboard Content -->
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Analytics Section -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                <div class="bg-[#007D7D] px-6 py-4">
                                    <h2 class="text-xl font-semibold text-white">Product Analytics</h2>
                                </div>
                                <div class="p-6">
                                    <!-- Top Product Clicks -->
                                    <div class="mb-8">
                                        <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#007D7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                            Top 10 Product Views
                                        </h3>
                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <ul class="divide-y divide-gray-200">
                                                <li class="py-3 flex justify-between items-center">
                                                    <span class="font-medium">Handmade Batik Scarf</span>
                                                    <span class="bg-[#e6f2f2] text-[#007D7D] px-3 py-1 rounded-full text-sm font-medium">124 views</span>
                                                </li>
                                                <li class="py-3 flex justify-between items-center">
                                                    <span class="font-medium">Ceylon Spice Collection</span>
                                                    <span class="bg-[#e6f2f2] text-[#007D7D] px-3 py-1 rounded-full text-sm font-medium">98 views</span>
                                                </li>
                                                <li class="py-3 flex justify-between items-center">
                                                    <span class="font-medium">Traditional Wooden Mask</span>
                                                    <span class="bg-[#e6f2f2] text-[#007D7D] px-3 py-1 rounded-full text-sm font-medium">76 views</span>
                                                </li>
                                                <li class="py-3 flex justify-between items-center">
                                                    <span class="font-medium">Handwoven Dumbara Mat</span>
                                                    <span class="bg-[#e6f2f2] text-[#007D7D] px-3 py-1 rounded-full text-sm font-medium">65 views</span>
                                                </li>
                                                <li class="py-3 flex justify-between items-center">
                                                    <span class="font-medium">Sri Lankan Tea Sampler</span>
                                                    <span class="bg-[#e6f2f2] text-[#007D7D] px-3 py-1 rounded-full text-sm font-medium">58 views</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- WhatsApp Order Clicks -->
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#007D7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                            </svg>
                                            Order Requests
                                        </h3>
                                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                            <div class="text-center py-8">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <h4 class="mt-2 text-sm font-medium text-gray-700">No data available yet</h4>
                                                <p class="mt-1 text-sm text-gray-500">Order requests will appear here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Quick Stats -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Total Products</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">128</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Active Artisans</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">42</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Pending Orders</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">17</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @elseif(Auth::user()->role === 'artisan')
                        <!-- Artisan Dashboard Content -->
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Performance Overview -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Total Products</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">14</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Monthly Orders</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">23</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                    <div class="p-6">
                                        <div class="flex items-center">
                                            <div class="p-3 rounded-full bg-[#e6f2f2] text-[#007D7D]">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-medium text-gray-700">Monthly Revenue</h3>
                                                <p class="text-3xl font-bold text-[#007D7D]">LKR 184,500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Products Section -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                <div class="bg-[#007D7D] px-6 py-4">
                                    <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-white">My Products</h2>
                                        <a href="#" class="text-sm font-medium text-white hover:text-[#d1e0e0] transition-colors flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Add New Product
                                        </a>
                                    </div>
                                </div>
                                <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Product Card 1 -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-md transition-shadow flex flex-col h-full">
                                    <div class="h-64 bg-gray-100 flex items-center justify-center p-4">
                                        <img src="{{ asset('Images_used/ProductPage_images/batik4.png') }}" alt="Batik Scarf" class="h-full w-full object-contain">
                                    </div>
                                    <div class="p-4 flex-grow">
                                        <h3 class="font-semibold text-gray-800">Handmade Batik Scarf</h3>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-sm text-gray-600">LKR 4,500</span>
                                            <span class="text-xs bg-[#e6f2f2] text-[#007D7D] px-2 py-1 rounded-full">In Stock</span>
                                        </div>
                                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                                            <span>Views: 124</span>
                                            <span>Orders: 8</span>
                                        </div>
                                        <div class="mt-3 flex space-x-2">
                                            <button class="text-sm text-[#007D7D] hover:text-[#006666] transition-colors">
                                                Edit
                                            </button>
                                            <button class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Card 2 -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-md transition-shadow flex flex-col h-full">
                                    <div class="h-64 bg-gray-100 flex items-center justify-center p-4">
                                        <img src="{{ asset('Images_used/ProductPage_images/batik3.png') }}" alt="Wooden Mask" class="h-full w-full object-contain">
                                    </div>
                                    <div class="p-4 flex-grow">
                                        <h3 class="font-semibold text-gray-800">Luxury Mens Batik Shirt</h3>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-sm text-gray-600">LKR 6,800</span>
                                            <span class="text-xs bg-[#e6f2f2] text-[#007D7D] px-2 py-1 rounded-full">In Stock</span>
                                        </div>
                                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                                            <span>Views: 89</span>
                                            <span>Orders: 5</span>
                                        </div>
                                        <div class="mt-3 flex space-x-2">
                                            <button class="text-sm text-[#007D7D] hover:text-[#006666] transition-colors">
                                                Edit
                                            </button>
                                            <button class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Card 3 -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-md transition-shadow flex flex-col h-full">
                                    <div class="h-64 bg-gray-100 flex items-center justify-center p-4">
                                        <img src="{{ asset('Images_used/ProductPage_images/batik5.png') }}" alt="Dumbara Mat" class="h-full w-full object-contain">
                                    </div>
                                    <div class="p-4 flex-grow">
                                        <h3 class="font-semibold text-gray-800">Luxury Batik Dress</h3>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-sm text-gray-600">LKR 12,000</span>
                                            <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Low Stock</span>
                                        </div>
                                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                                            <span>Views: 76</span>
                                            <span>Orders: 3</span>
                                        </div>
                                        <div class="mt-3 flex space-x-2">
                                            <button class="text-sm text-[#007D7D] hover:text-[#006666] transition-colors">
                                                Edit
                                            </button>
                                            <button class="text-sm text-red-500 hover:text-red-700 transition-colors">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

            </div>
                            </div>

                            <!-- Recent Orders -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                <div class="bg-[#007D7D] px-6 py-4">
                                    <h2 class="text-xl font-semibold text-white">Recent Orders</h2>
                                </div>
                                <div class="p-6">
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Items</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#SM-1042</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Nimal Perera</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Batik Scarf (2)</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">LKR 9,000</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Completed
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-11-05</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#SM-1038</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sarah Johnson</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Wooden Mask (1)</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">LKR 6,800</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                            Shipped
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-11-02</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#SM-1035</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kamal Silva</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dumbara Mat (1)</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">LKR 12,000</td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            Processing
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-10-30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4 flex justify-end">
                                        <a href="#" class="text-sm font-medium text-[#007D7D] hover:text-[#006666] transition-colors">
                                            View All Orders →
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Performance -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                                <div class="bg-[#007D7D] px-6 py-4">
                                    <h2 class="text-xl font-semibold text-white">Product Performance</h2>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Top Performing Products -->
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#007D7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                                </svg>
                                                Top Performing Products
                                            </h3>
                                            <div class="space-y-4">
                                                <div class="flex items-center">
                                                    <!--<div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 overflow-hidden">
                                                        <img src="{{ asset('Images_used/product_images/batik_scarf.jpg') }}" alt="Batik Scarf" class="h-full w-full object-cover">
                                                    </div>-->
                                                    <div class="ml-4">
                                                        <p class="text-sm font-medium text-gray-900">Handmade Batik Scarf</p>
                                                        <div class="flex items-center mt-1">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-[#007D7D] h-2 rounded-full" style="width: 75%"></div>
                                                            </div>
                                                            <span class="ml-2 text-xs font-medium text-gray-500">8 orders</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <!--<div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 overflow-hidden">
                                                        <img src="{{ asset('Images_used/product_images/wooden_mask.jpg') }}" alt="Wooden Mask" class="h-full w-full object-cover">
                                                    </div>-->
                                                    <div class="ml-4">
                                                        <p class="text-sm font-medium text-gray-900">Traditional Wooden Mask</p>
                                                        <div class="flex items-center mt-1">
                                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                                <div class="bg-[#007D7D] h-2 rounded-full" style="width: 45%"></div>
                                                            </div>
                                                            <span class="ml-2 text-xs font-medium text-gray-500">5 orders</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Recent Reviews -->
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-700 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#007D7D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>
                                                Recent Reviews
                                            </h3>
                                            <div class="space-y-4">
                                                <div class="border-b border-gray-200 pb-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                                                <span class="text-gray-600">AJ</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="text-sm font-medium text-gray-900">Anjali Fernando</p>
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292z"></path>
                                                                    </svg>
                                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292z"></path>
                                                                    </svg>
                                                                </div>
                                                                <span class="ml-1 text-xs text-gray-500">2 days ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-2 text-sm text-gray-600">"The batik scarf is absolutely beautiful! The colors are vibrant and the craftsmanship is excellent. Will definitely order again."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endauth
            </div>
        </main>
    </div>
</div>
@endsection