@extends('layouts.app')

@section('content')
<div class="relative min-h-[50vh]" style="background-image: url('{{ asset('images/senafet-jif-2026-pattern.png') }}');">
    {{-- Arrière-plan motif SENAFET / JIF 2026 "Chaque femme compte" --}}
    <div
        class="absolute inset-0 bg-repeat opacity-[0.12] bg-[length:280px_280px] lg:bg-[length:380px_380px]"
        style="background-image: url('{{ asset('images/senafet-jif-2026-pattern.png') }}');"
        aria-hidden="true"
    ></div>
    <div class="absolute inset-0 bg-white/85" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-0 pb-12 lg:pb-16">
    <x-page-header :title="__('about.title')" subtitle="SENAFET / JIF 2026" />

    {{-- Citation présidentielle
    <div class="bg-[#9B2363] text-white rounded-xl shadow-lg p-6 lg:p-8 mb-8 lg:mb-12 text-center">
        <p class="text-lg lg:text-xl italic">« {{ __('about.quote_text') }} »</p>
        <p class="mt-4 font-semibold">{{ __('about.quote_author') }}</p>
        <p class="text-white/90 text-sm">{{ __('about.quote_author_sub') }}</p>
    </div> --}}

    {{-- Édito de la Ministre — Photo à gauche, panneau magenta à droite (en premier) --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-8 lg:mb-12 rounded-t-xl lg:rounded-tr-3xl overflow-hidden shadow-xl">
        <div class="lg:col-span-5 relative min-h-[280px] lg:min-h-[480px] overflow-hidden">
            <img
                src="{{ asset('images/edito_ministre.png') }}"
                alt="{{ __('about.edito_minister_name') }}"
                class="absolute inset-0 w-full h-full object-cover object-center"
                onerror="this.src='{{ asset('images/about-minister.jpg') }}'; this.onerror=function(){this.src='https://picsum.photos/seed/edito-minister/800/600';}"
            />
        </div>
        <div class="lg:col-span-7 bg-[#9B2363] rounded-b-xl lg:rounded-bl-none lg:rounded-tr-3xl p-6 lg:p-8 xl:p-10 text-white flex flex-col">
            {{-- <div class="flex items-start gap-4 mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="SENAFET / JIF 2026" class="w-16 h-16 lg:w-20 lg:h-20 rounded-full object-contain bg-white/10 p-1.5 shrink-0" />
                <div>
                    <p class="text-white/95 text-sm lg:text-base font-medium tracking-widest uppercase">{{ __('about.edito_heading') }}</p>
                    <p class="text-xl lg:text-2xl font-bold mt-1">{{ __('about.edito_minister_name') }}</p>
                    <p class="text-white/90 text-sm lg:text-base mt-0.5">{{ __('about.edito_minister_title') }}</p>
                </div>
            </div> --}}
            <div class="edito-body text-white/95 text-sm lg:text-base leading-relaxed space-y-4 overflow-y-auto max-h-[60vh] lg:max-h-none pr-2 lg:pr-0">
                @foreach(array_filter(explode("\n\n", __('about.edito_body'))) as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Contexte Global — Présentation de la SENAFET/JIF 2026 --}}
    <section id="contexte-global" class="bg-white rounded-xl shadow-lg mb-12 overflow-hidden">
        <h2 class="text-2xl lg:text-3xl font-bold text-[#9B2363] py-8 px-6 border-b border-[#ecd5e8]">
            Contexte Global
        </h2>
        <div class="p-6 lg:p-10 space-y-8">
            <div>
                <p class="text-[#222] mb-4">
                    Le Tchad s'inscrit dans une dynamique de transformation socio-économique profonde. Dans ce contexte, l'autonomisation des femmes n'est plus une option mais un impératif stratégique pour accélérer le développement national.
                </p>
                <p class="text-[#222] mb-4">
                    La SENAFET / JIF édition 2026 représente bien plus qu'un événement commémoratif : c'est un programme stratégique national d'investissement dans le capital humain féminin, aligné sur la vision transformatrice du Maréchal, MAHAMAT IDRISS DEBY ITNO, Président de la République, Chef de l'État et les Objectifs de Développement Durable 2030.
                </p>
                <p class="text-[#222]">
                    Cette édition constitue une opportunité stratégique pour les partenaires de s'associer à un projet d'envergure nationale aux retombées économiques, sociales et diplomatiques exceptionnelles.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-3">a) Vision</h3>
                    <p class="text-[#222]">
                        Faire des femmes tchadiennes des actrices centrales de la transformation économique et sociale du pays, via leur autonomisation économique, leur inclusion dans les secteurs porteurs et leur pleine participation citoyenne.
                    </p>
                </div>
                <div>
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-3">b) Objectifs Stratégiques</h3>
                    <p class="text-[#222]">
                        Valoriser les compétences, le savoir-faire et les réalisations des femmes tchadiennes dans tous les secteurs, afin de renforcer leur autonomisation et leur participation active au développement socio-économique du pays.
                    </p>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-lg text-[#9B2363] mb-3">c) Alignement avec les Engagements Internationaux</h3>
                <ul class="list-disc list-inside text-[#222] space-y-1">
                    <li>Objectifs de Développement Durable (ODD 5)</li>
                    <li>Agenda 2063 de l'Union Africaine (Aspiration 6)</li>
                    <li>Vision du Chef de l'État (Programme politique, chantier 05)</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg text-[#9B2363] mb-3">d) Positionnement Unique</h3>
                <ul class="list-disc list-inside text-[#222] space-y-2">
                    <li>Premier événement national d'autonomisation économique des femmes à l'échelle du Tchad</li>
                    <li>Plateforme d'accélération de l'inclusion financière touchant toutes les femmes</li>
                    <li>Catalyseur de croissance économique avec un impact projeté de +2% du PIB d'ici 2030</li>
                    <li>Vitrine internationale du leadership tchadien en matière d'égalité et d'autonomisation</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Historique de la SENAFET --}}
    <section id="historique-senefat" class="bg-white rounded-xl shadow-lg mb-12 overflow-hidden">
        <h2 class="text-2xl lg:text-3xl font-bold text-[#9B2363] py-8 px-6 border-b border-[#ecd5e8]">
            {{ __('about.historique_title') }}
        </h2>
        <div class="p-6 lg:p-10">
            <div class="grid grid-flow-col grid-rows-3 gap-6">
                {{-- Image illustrative élargie et en full dans le contenu --}}
                <div class="row-span-3 col-span-3 flex flex-col items-center bg-[#9B2363]/10 rounded-xl overflow-hidden justify-center relative min-h-[320px] md:min-h-[480px] lg:min-h-[600px] mb-4 lg:mb-0 self-stretch">
                    <img src="{{ asset('images/Kakemono.png') }}"
                         alt="Kakemono SENAFET"
                         class="w-full h-full min-h-full object-cover object-center transition duration-300"
                         onerror="this.src='https://picsum.photos/seed/senefat-history/900/350'; this.onerror=null;">
                </div>
                {{-- I. Origines et Contexte International --}}
                <div class="col-span-2">
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-2">I. Origines et Contexte International</h3>
                    <p class="text-[#222] mb-2">
                        La Semaine Nationale de la Femme Tchadienne (SENAFET), dont la première édition remonte à 1987, puise ses racines dans la Journée Internationale de la Femme (JIF) célébrée le 8 mars. Cette date historique commémore le soulèvement de 1857, où des ouvrières de l'industrie textile à New York manifestèrent pour dénoncer des conditions de travail précaires et les inégalités de genre. En 1908, un défilé fut organisé par des New-Yorkaises pour honorer la mémoire de ce mouvement précurseur.
                    </p>
                    <p class="text-[#222]">
                        Ces luttes ont abouti à une reconnaissance mondiale en 1977, lorsque l’Assemblée Générale des Nations Unies a officiellement invité les États membres à consacrer une journée dans l’année à la célébration des droits des femmes. Le 8 mars fut alors retenu à l'unanimité.
                    </p>
                </div>
                {{-- II. Constats sur la situation de la femme tchadienne + III. Institutionnalisation --}}
                <div class="col-span-2 row-span-2 flex flex-col gap-8">
                    <div>
                        <h3 class="font-semibold text-lg text-[#9B2363] mb-2">II. Constats sur la situation de la femme tchadienne</h3>
                        <ul class="list-disc list-inside text-[#222] mb-4 space-y-1 text-sm lg:text-base">
                            <li>Le faible accès à l’information relative aux droits de la femme et aux appuis matériels, techniques et financiers ;</li>
                            <li>La faible représentation des femmes dans les instances de prise de décisions relatives à la sécurité, à la paix et au développement ;</li>
                            <li>La persistance des pesanteurs socioculturelles et le poids de la pauvreté sur la femme (le mariage des enfants et/ou forcé) ;</li>
                            <li>La non capitalisation du rôle des femmes dans la promotion de la citoyenneté, de l’entreprenariat et de la réduction de la pauvreté ;</li>
                            <li>La faible professionnalisation en matière de leadership au sein des organisations féminines ;</li>
                            <li>La faible reconnaissance de la contribution de la femme aux efforts de développement ;</li>
                            <li>L’insuffisance des textes portant protection des femmes (la non ratification/non application de certaines dispositions juridiques) ;</li>
                            <li>L’éducation de la petite enfance très peu développée au Tchad ;</li>
                            <li>La couverture quantitative insuffisante et inéquitable de l’éducation de base ;</li>
                            <li>Le taux d’achèvement au primaire stagnant (28% pour les filles).</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-[#9B2363] mb-2">III. Institutionnalisation de la SENAFET</h3>
                        <p class="text-[#222] mb-2">
                            Reconnaissant les efforts et l'engagement politique des femmes tchadiennes et leur rôle crucial dans le développement national, le Gouvernement a formellement institué la SENAFET par le Décret n° 050/PR/90 du 25 février 1990.
                        </p>
                        <p class="text-[#222] mb-2">
                            L’objectif de cette semaine est de contribuer à la mise en œuvre de la politique nationale de la promotion de la femme tchadienne. Aussi, elle est une période de réflexion et d’analyse de la contribution de la femme au développement.
                        </p>
                        <p class="text-[#222] mb-2">
                            Ce cadre juridique a été révisé deux fois pour s'adapter aux réalités contemporaines à travers:
                        </p>
                        <ul class="list-disc list-inside text-[#222] text-sm lg:text-base mb-2">
                            <li>le décret n° 086/PR/MASF/2002 du 16 avril 2002.</li>
                            <li>le décret n° 0302/PT/PM/MGSN/2023 du 20 février 2023.</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Suite du contenu sur une nouvelle section pour plus de lisibilité --}}
            <div class="mt-10 grid grid-cols-1 gap-8">
                <div>
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-2">IV. Objectifs et Impact Social</h3>
                    <p class="text-[#222] mb-2">
                        Au-delà de l’aspect festif, depuis sa création, la SENAFET s'est imposée comme un espace privilégié de dialogue, de partage d'expériences et d'interaction entre les femmes de toutes les couches socioprofessionnelles.
                    </p>
                    <p class="text-[#222] mb-2">
                        Durant plus de trois décennies, la SENAFET est devenue un catalyseur de changement social. Elle offre une plateforme unique de dialogue intergénérationnel et intersectoriel autour de piliers majeurs telles que :
                    </p>
                    <ul class="list-disc list-inside text-[#222] text-sm lg:text-base space-y-1">
                        <li>l’autonomisation économique et le leadership féminin ;</li>
                        <li>la participation politique et la parité ;</li>
                        <li>l’égalité et l’équité de genre ;</li>
                        <li>la lutte contre les violences basées sur le genre (VBG) ;</li>
                        <li>les droits en matière de santé sexuelle et reproductive ;</li>
                        <li>la contribution des femmes à la prévention et à la résolution des conflits.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-2">V. Une reconnaissance nationale majeure</h3>
                    <p class="text-[#222]">
                        Un jalon supplémentaire a été posé en 2019 par le Décret n° 273/PR/MFPTDS/2019 du 7 mars 2019. Le Gouvernement a déclaré la journée du 8 mars fériée, chômée et payée sur l'ensemble du territoire national, marquant ainsi l'importance capitale de cette célébration pour la nation toute entière.
                    </p>
                </div>
                <div>
                    <h3 class="font-semibold text-lg text-[#9B2363] mb-2">VI. Les impacts positifs induits par la SENAFET</h3>
                    <p class="text-[#222] mb-2">
                        La question de l’égalité de genre, de l’équité et l’autonomisation des femmes a indéniablement connue des avancées ces dernières années. Sur le plan national, les textes législatifs et règlementaires en vigueur reconnaissent pour l’essentiel aux hommes et aux femmes les mêmes droits et devoirs. On peut citer entre autres :
                    </p>
                    <ul class="list-disc list-inside text-[#222] text-sm lg:text-base space-y-1 mb-2">
                        <li>la Constitution du Tchad ;</li>
                        <li>la Loi n° 38/PR/96 portant code du travail en son art 8 interdit à tout employeur de prendre en considération le critère de sexe en ce qui concerne l’embauche, la formation professionnelle, l’avancement, la rémunération, l’octroi des avantages sociaux, la discipline ou la rupture du contrat.</li>
                        <li>la Loi n° 19/PR/2007 portant lutte contre le VIH/SIDA et protection de personnes vivantes avec le VIH/SIDA.</li>
                        <li>la Loi n° 17/PR/2001 portant Statut général de la Fonction Publique qui consacre au même titre que les autres lois, le principe de non-discrimination dans l’accès des Tchadiens de deux sexes à la Fonction Publique.</li>
                        <li>la Loi électorale ;</li>
                        <li>la Loi n° 29/PR/2015 portant ratification de l’ordonnance n°006/PR/015 du 14 mars 2015 portant interdiction du mariage d’enfants au Tchad. Cette loi fixe l’âge minimum du mariage à 18 ans ; elle établit par ailleurs une peine d’emprisonnement de 5 à 10 ans et une amende de 500 000 à 5 000 000 francs pour toute personne qui contraint par quelque moyen que ce soit, une personne mineure au mariage ;</li>
                        <li>la Loi N° 001/PR/2017 portant code pénal Tchadien sanctionne les actes de violences sexuelles et basées sur le genre (SGBV) ;</li>
                        <li>la Politique Nationale Genre a pour but de fournir à l'Etat et à ses différents partenaires au développement, un instrument d'orientation en vue d'intégrer les préoccupations, besoins spécifiques des hommes et des femmes ainsi que leurs capacités à concevoir, mettre en œuvre, contrôler et évaluer les plans et programmes ;</li>
                        <li>La Stratégie Nationale de lutte contre les VBG, cadre de référence et de réponses à toutes les questions liées aux violences de genre ;</li>
                        <li>La loi N°22 portant ratification de l’ordonnance N° 12/PR/2018 instituant la parité dans les fonctions électives et nominatives a été adoptée par l’Assemblée Nationale. Un quota d’au moins 30% est accordé aux femmes dans toutes les fonctions électives et nominatives. Ce quota évoluera progressivement vers la parité ;</li>
                        <li>La mise en œuvre du plan d’action national de la résolution 1325 ;</li>
                        <li>L’Ordonnance N°003/PR/2025 du 21 janvier 2025 portant prévention et répression des violences à  l’égard des femmes et des filles en République du Tchad ;</li>
                        <li>La mise en place de l’Observatoire pour la promotion de l’Egalité et de l’Equité du Genre (OPEG).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    </div>
</div>
@endsection
