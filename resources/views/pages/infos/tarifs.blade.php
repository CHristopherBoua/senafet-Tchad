@extends('layouts.app')

@section('content')
<div class="relative min-h-[50vh]" style="background-image: url('{{ asset('images/senafet-jif-2026-pattern.png') }}');">
    <div
        class="absolute inset-0 bg-repeat opacity-[0.12] bg-[length:280px_280px] lg:bg-[length:380px_380px]"
        style="background-image: url('{{ asset('images/senafet-jif-2026-pattern.png') }}');"
        aria-hidden="true"
    ></div>
    <div class="absolute inset-0 bg-white/85" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
        <x-page-header :title="__('menu.tarifs')" subtitle="SENAFET / JIF 2026" />

        {{-- Section Packs sponsoring --}}
        <section class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-[#9B2363]/10 via-white to-[#9B2363]/10 border-b-2 border-[#9B2363] px-6 py-6">
                <h2 class="text-2xl lg:text-3xl font-bold text-[#9B2363] text-center">Packs sponsoring</h2>
            </div>

            <div class="p-4 lg:p-6 overflow-x-auto">
                <div class="flex flex-col lg:flex-row gap-6 lg:gap-4 items-start mb-8">
                    <div class="flex-shrink-0 flex justify-center lg:justify-start w-full lg:w-auto">
                        <img src="{{ asset('images/logo.png') }}" alt="SENAFET / JIF 2026" class="w-32 h-32 lg:w-40 lg:h-40 rounded-full object-contain bg-[#9B2363]/5 p-2" />
                    </div>
                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                        <div class="bg-amber-50 border-2 border-amber-400 rounded-xl p-4 text-center">
                            <p class="font-bold text-amber-700 text-sm uppercase tracking-wide">Sponsor Or</p>
                            <p class="text-xl font-bold text-[#9B2363] mt-2">10 millions FCFA</p>
                        </div>
                        <div class="bg-slate-100 border-2 border-slate-400 rounded-xl p-4 text-center">
                            <p class="font-bold text-slate-600 text-sm uppercase tracking-wide">Sponsor Diamant</p>
                            <p class="text-xl font-bold text-[#9B2363] mt-2">15 millions FCFA</p>
                        </div>
                        <div class="bg-gray-200 border-2 border-gray-400 rounded-xl p-4 text-center">
                            <p class="font-bold text-gray-600 text-sm uppercase tracking-wide">Sponsor Platinum</p>
                            <p class="text-xl font-bold text-[#9B2363] mt-2">20 millions FCFA</p>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[640px] text-sm lg:text-base border-collapse">
                        <thead>
                            <tr class="bg-[#9B2363] text-white">
                                <th class="text-left py-3 px-4 font-semibold rounded-tl-lg">Avantages</th>
                                <th class="text-center py-3 px-4 font-semibold">Or</th>
                                <th class="text-center py-3 px-4 font-semibold">Diamant</th>
                                <th class="text-center py-3 px-4 font-semibold rounded-tr-lg">Platinum</th>
                            </tr>
                        </thead>
                        <tbody class="text-[#333]">
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Insertion livre d'or</td>
                                <td class="py-3 px-4 text-center">½ page</td>
                                <td class="py-3 px-4 text-center">1 page</td>
                                <td class="py-3 px-4 text-center">2 pages</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Table soirée de gala</td>
                                <td class="py-3 px-4 text-center">1</td>
                                <td class="py-3 px-4 text-center">2</td>
                                <td class="py-3 px-4 text-center">3</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Cérémonie officielle</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Cérémonie de lancement SENAFET</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Cérémonie de lancement TV et Radio</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                                <td class="py-3 px-4 text-center">Invitation VIP</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Cérémonie de lancement TV et Radio — Membre jury</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Speed dating dans toutes les articulations indoors</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Stand</td>
                                <td class="py-3 px-4 text-center">12 m²</td>
                                <td class="py-3 px-4 text-center">16 m²</td>
                                <td class="py-3 px-4 text-center">25 m²</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Logo sur tous nos supports</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Couverture médiatique de votre participation</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">++</td>
                                <td class="py-3 px-4 text-center">+++</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Interviews et reportages TV/Radio « Voix de femme »</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Branding fond de scène ateliers</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Poses de visuel outdoor et indoor</td>
                                <td class="py-3 px-4 text-center">Sur consultation</td>
                                <td class="py-3 px-4 text-center">Sur consultation</td>
                                <td class="py-3 px-4 text-center">Sur consultation</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[#9B2363]/5">
                                <td class="py-3 px-4 font-medium">Tenue des bénévoles (tee-shirts, polos, casquette, etc.)</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                                <td class="py-3 px-4 text-center">+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
