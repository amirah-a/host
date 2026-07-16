@component('layouts.app')
    <div class="flex flex-col items-center justify-center min-h-[75vh] py-8">
        <!-- Main Elegant Card -->
        <div class="w-full max-w-xl bg-white border border-gray-100 rounded-2xl shadow-md overflow-hidden">
            
            <!-- Beautiful Header with Brand Logo Gradient Background (Teal to Green) -->
            <div class="p-8 text-center bg-gradient-to-br from-[#0096a4] to-[#39b54a] text-white relative">
                <!-- Subtle background pattern decorative glow -->
                <div class="absolute inset-0 bg-white/10 opacity-20 pointer-events-none mix-blend-overlay"></div>

                <!-- Sleek White Success Icon -->
                <div class="relative mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-4 shadow-sm">
                    <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>

                <h1 class="text-2xl font-extrabold tracking-tight">Application Complete</h1>
                <p class="text-xs text-teal-50 font-bold uppercase tracking-widest mt-1">H.O.S.T. Training Programme</p>
            </div>

            <!-- Content Body -->
            <div class="p-8">
                <!-- Personalized Greeting Section -->
                <div class="text-center mb-6">
                    <h2 class="text-lg font-bold text-gray-800">
                        Thank you, {{ $firstName ?? 'Applicant' }} {{ $lastName ?? '' }}!
                    </h2>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-md mx-auto mt-2">
                        Your registration has been successfully received by the Ministry of Sport and Youth Affairs. Here is what you can expect next:
                    </p>
                </div>

                <!-- Next Steps Process (Sleek Gradient Timeline using Brand Green & Teal) -->
                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-6">Application Journey</h3>
                
                <div class="relative pl-4">
                    <!-- Left Connector Line with a fading brand gradient -->
                    <div class="absolute left-7 top-3 bottom-3 w-0.5 bg-gradient-to-b from-[#39b54a] via-[#0096a4] to-gray-200"></div>

                    <!-- Step 1 -->
                    <div class="flex items-start space-x-6 pb-8 relative last:pb-0">
                        <div class="flex-shrink-0 z-10">
                            <div class="flex items-center justify-center h-7 w-7 rounded-full bg-gradient-to-br from-[#0096a4] to-[#39b54a] text-white text-xs font-bold shadow-sm ring-4 ring-white">
                                1
                            </div>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Email Confirmation</h4>
                            <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">
                                A confirmation receipt has been dispatched to your email inbox to acknowledge your application.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start space-x-6 pb-8 relative last:pb-0">
                        <div class="flex-shrink-0 z-10">
                            <div class="flex items-center justify-center h-7 w-7 rounded-full bg-gradient-to-br from-[#0096a4] to-[#39b54a] text-white text-xs font-bold shadow-sm ring-4 ring-white">
                                2
                            </div>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Application Review</h4>
                            <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">
                                Our committee will review your application details to verify programme eligibility.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start space-x-6 relative">
                        <div class="flex-shrink-0 z-10">
                            <div class="flex items-center justify-center h-7 w-7 rounded-full bg-gradient-to-br from-[#0096a4] to-[#39b54a] text-white text-xs font-bold shadow-sm ring-4 ring-white">
                                3
                            </div>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800">Shortlist Notification</h4>
                            <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">
                                If shortlisted, you will receive an email or phone call to discuss the next steps of the selection process.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Disclaimer Banner (Accented with Brand Orange/Yellow) -->
                <div class="bg-amber-50/60 border border-amber-100 rounded-xl p-4 mt-8 mb-8">
                    <div class="flex items-start">
                        <!-- Orange Warning Icon -->
                        <svg class="h-5 w-5 text-[#f19e18] flex-shrink-0 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-3">
                            <p class="text-xs text-amber-900 leading-relaxed">
                                <span class="font-bold uppercase text-[#f19e18]">Disclaimer:</span> Registering does not guarantee admission. Only shortlisted applicants will be contacted.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Centered Clean, Minimal Navigation Button Inside Card -->
                <div class="flex justify-center border-t border-gray-100 pt-6">
                    <a 
                        href="https://msya.gov.tt" 
                        class="group bg-white hover:bg-gray-50 text-gray-700 hover:text-gray-900 text-sm font-semibold py-2.5 px-6 rounded-xl border border-gray-200 hover:border-gray-300 shadow-sm transition-all duration-150 inline-flex items-center justify-center w-full sm:w-auto"
                    >
                        <svg class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-600 transition-colors duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Return to Home Page
                    </a>
                </div>

            </div>
        </div>
    </div>
@endcomponent