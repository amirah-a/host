@extends('layouts.layout')
@section('Title', 'Applications Closed')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-200 px-6">

        <div class="bg-white shadow-lg rounded-xl max-w-lg w-full overflow-hidden space-y-6">

            <!-- Header strip -->
            <div class="h-2" style="background-color: #019f89;"></div>

            <div class="p-10 text-center space-y-6">

                <!-- Logo -->
                <a href="https://www.msya.gov.tt" class="flex justify-center">
                    <img src="{{ asset('images/msya-logo.png') }}" alt="MSYA Logo" class="" style="max-width:100%; height: auto; width:15rem;">
                </a>

                <!-- Title -->
                <h1 class="text-3xl font-bold text-gray-800">
                    Applications Closed
                </h1>

                <!-- Divider -->
                <div class="w-16 h-1 bg-gray-200 mx-auto rounded"></div>

                <!-- Main message -->
                <p class="text-gray-700 text-base leading-relaxed">
                    Thank you for your interest in
                    <span class="font-semibold text-gray-800">{{ config('app.name') }}</span>.
                    The application period for the Hospitality Operations Service Training (2026) is now closed.
                </p>

                <!-- Contact info -->
                <p class="text-gray-700 text-base text-center gap-2">
                    <i class="bi bi-info-circle text-teal-600"></i>
                    For more information, please visit our
                    <a href="https://www.msya.gov.tt" class="text-blue-600 hover:text-blue-700 font-medium">
                        website
                    </a>
                    or email us at
                    <a href="mailto:info@msya.gov.tt" class="text-blue-600 hover:text-blue-700 font-medium">
                        info@msya.gov.tt
                    </a>.
                </p>

            </div>
        </div>
    </div>
@endsection
