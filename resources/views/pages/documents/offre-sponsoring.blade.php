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
        <x-page-header :title="__('menu.offre_sponsoring')" subtitle="SENAFET / JIF 2026" />

        {{-- Introduction --}}
        <section class="bg-white rounded-xl shadow-lg mb-8 lg:mb-12 overflow-hidden">
            <div class="p-6 lg:p-10 space-y-6">
                <p class="text-[#222] leading-relaxed">
                    La SENAFET dépasse le cadre d'une simple célébration pour devenir un levier durable de développement et de cohésion sociale.
                </p>
                <p class="text-[#222] leading-relaxed">
                    La SENAFET est la plateforme unique pour valoriser votre engagement en matière de responsabilité sociétale (RSE) au Tchad.
                </p>
            </div>
        </section>

        {{-- Sponsoriser SENAFET/JIF édition 2026, c'est : --}}
        <section class="bg-white rounded-xl shadow-lg mb-8 lg:mb-12 overflow-hidden">
            <h2 class="text-xl lg:text-2xl font-bold text-[#9B2363] py-6 px-6 border-b border-[#ecd5e8]">
                Sponsoriser SENAFET/JIF édition 2026, c'est :
            </h2>
            <div class="p-6 lg:p-10">
                <ul class="space-y-4 text-[#222] list-disc list-inside">
                    <li>S'associer à un programme national structurant qui place les femmes tchadiennes au cœur de la transformation économique et sociale du pays.</li>
                    <li>Contribuer directement à l'autonomisation économique de 100 000 femmes, la création de 20 000 entreprises féminines par an et la génération d'une croissance nationale.</li>
                </ul>
            </div>
        </section>

        {{-- Et aussi, de : --}}
        <section class="bg-white rounded-xl shadow-lg mb-8 lg:mb-12 overflow-hidden">
            <h2 class="text-xl lg:text-2xl font-bold text-[#9B2363] py-6 px-6 border-b border-[#ecd5e8]">
                Et aussi, de :
            </h2>
            <div class="p-6 lg:p-10">
                <ul class="space-y-4 text-[#222] list-disc list-inside">
                    <li>Bénéficier d'une exposition exceptionnelle à forte valeur symbolique et émotionnelle sur toute l'étendue du territoire national.</li>
                    <li>Bénéficier des retombées positives d'investissement qui accroît votre notoriété et améliore l'ancrage de votre entreprise au Tchad.</li>
                </ul>
            </div>
        </section>

        {{-- Bon à savoir --}}
        <section class="bg-[#9B2363] text-white rounded-xl shadow-lg mb-8 lg:mb-12 overflow-hidden">
            <h2 class="text-xl lg:text-2xl font-bold py-6 px-6">
                Bon à savoir
            </h2>
            <div class="p-6 lg:p-10 space-y-6">
                <p class="text-white/95 leading-relaxed">
                    Tout au long de la SENAFET/JIF édition 2026, avec le concours des sponsors, l'organisation mobilisera des ambassadrices et modèles de réussite.
                </p>
                <p class="font-semibold">Ensemble, nous procéderons à :</p>
                <ul class="space-y-3 text-white/95 list-disc list-inside">
                    <li>L'identification des femmes inspirantes dans la politique, l'entrepreneuriat, les sciences, les arts et le sport.</li>
                    <li>La réalisation des portraits, des témoignages, des rencontres avec les jeunes filles.</li>
                    <li>La diffusion massive de leurs parcours sur les médias et réseaux sociaux.</li>
                </ul>
                <p class="text-white/95 leading-relaxed">
                    En devenant sponsor, vous avez la possibilité de choisir des dispositifs ciblés.
                </p>
            </div>
        </section>

        {{-- Packs sponsoring --}}
        <section class="bg-white rounded-xl shadow-lg mb-12 overflow-hidden">
            <h2 class="text-2xl lg:text-3xl font-bold text-[#9B2363] py-8 px-6 border-b border-[#ecd5e8] flex items-center gap-4 flex-wrap">
                <img src="{{ asset('images/logo.png') }}" alt="SENAFET/JIF 2026" class="w-14 h-14 rounded-full object-contain bg-[#f5e6ef] p-1.5" />
                Packs sponsoring
            </h2>
            <div class="p-4 lg:p-6 overflow-x-auto">
                <table class="w-full min-w-[640px] text-sm lg:text-base border-collapse">
                    <thead>
                        <tr class="border-b-2 border-[#9B2363]">
                            <th class="text-left py-4 px-3 font-semibold text-[#222] bg-[#faf8f9] rounded-tl-lg">Avantage / Caractéristique</th>
                            <th class="text-center py-4 px-3 font-semibold text-[#222] bg-amber-50 border-l border-[#ecd5e8]">
                                <span class="inline-flex items-center gap-1 rounded-full bg-amber-100 text-amber-800 px-3 py-1 text-sm font-bold">SPONSOR Or</span>
                                <span class="block mt-2 text-[#9B2363] font-bold">10 MILLIONS FCFA</span>
                            </th>
                            <th class="text-center py-4 px-3 font-semibold text-[#222] bg-slate-50 border-l border-[#ecd5e8]">
                                <span class="inline-flex items-center gap-1 rounded-full bg-slate-200 text-slate-800 px-3 py-1 text-sm font-bold">SPONSOR Diamant</span>
                                <span class="block mt-2 text-[#9B2363] font-bold">15 MILLIONS FCFA</span>
                            </th>
                            <th class="text-center py-4 px-3 font-semibold text-[#222] bg-slate-100 border-l border-[#ecd5e8] rounded-tr-lg">
                                <span class="inline-flex items-center gap-1 rounded-full bg-slate-300 text-slate-800 px-3 py-1 text-sm font-bold">SPONSOR PLATINIUM</span>
                                <span class="block mt-2 text-[#9B2363] font-bold">20 MILLIONS FCFA</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-[#222]">
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Insertion livre d'or</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">½ page</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">1 page</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">2 pages</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Table soirée de gala</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">1</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">2</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">3</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Cérémonie officielle</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Cérémonie de lancement SENAFET</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Cérémonie de lancement TV et radio (Invitation)</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Invitation VIP</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Cérémonie de lancement TV et radio (Jury)</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Membre jury</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Membre jury</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Membre jury</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Speed dating dans toutes les articulations indoors</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Stand</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">12 m²</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">16 m²</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">25 m²</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Logo sur tous nos supports</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Couverture médiatique de votre participation</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">++</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+++</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Interviews et reportages TV/Radio « Voix de femme »</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Branding fond de scène ateliers</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Poses de visuel outdoor et indoor</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Sur consultation</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Sur consultation</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">Sur consultation</td>
                        </tr>
                        <tr class="border-b border-[#ecd5e8] hover:bg-[#faf8f9]">
                            <td class="py-3 px-3 font-medium">Tenue des bénévoles (tee-shirts, polos, casquette, etc.)</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                            <td class="py-3 px-3 text-center border-l border-[#ecd5e8]">+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection
