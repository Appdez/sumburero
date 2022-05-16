@extends('website.layouts.website')
@section('title', 'Sumburero')
@section('content')

    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 mt-3">
                    <div class="row gx-0">
                        <div class="col-lg-6 d-flex flex-column justify-content-center  " data-aos="fade-left">
                            <div class="content bg-white" style="padding: 40px">

                                <h2>Sumburero</h2>
                                <p>
                                    É uma organização sem fins lucrativos que tem suas actividades baseadas na experiência e
                                    aprendizado
                                    de varias Organizações
                                    da Sociedade Civil como ESSOR, CCM, OASIS, PNDH, Universidade Zambeze desde
                                    vários anos actuando na província de Sofala, Moçambique; assim como através da avaliação
                                    do contexto da Protecção Social da Criança realizada através de uma pesquisa em
                                    8 Distritos em 2017 e tendo em conta as prioridades de acção do Governo no que
                                    respeita a Protecção Social.
                                </p>
                                <div class="text-center text-lg-start">
                                    <a href="#"
                                        class="btn btn-dark-light btn-rounded  d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>ver mais</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 d-flex align-items-center  " data-aos="zoom-out" data-aos-delay="200">
                            <img src="{{ asset('website/images/home.jpg') }}" class="img-fluid rounded-3" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 mt-3">
                    <div class="row gy-4 mt-3">
                        <div class="col-lg-6 col-md-6  " data-aos="fade-right">
                            <div class="card no-border p-16-px">
                                <div class="card-body">
                                    <h3>Missão</h3>
                                    <p>É de promover o desenvolvimento sustentável através de pesquisas,
                                        assistência técnica, desenvolvimento de ferramentas de monitoria e
                                        avaliação dos projectos, mobilização de recursos para projectos socias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6  " data-aos="fade-left" data-aos-delay="200">
                            <div class="card no-border p-16-px">
                                <div class="card-body">
                                    <h3>Visão</h3>
                                    <p>É de uma sociedade que zela pelos seus direitos, das crianças em situação de
                                        vulnerabilidade, garantido o acesso a educação básica, saúde, proteçào, alimentação
                                        e promovendo um desenvolvimento psicosocial.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-11 gy4 mt-3">
                    <div class="row">

                        <div class="col-xl-4 text-center   justify-center" data-aos="fade-right" data-aos-delay="100">
                            <h3>Principais Actividades</h3>
                            <img src="{{ asset('website/images/actividades.jpg') }}" class="img-fluid btn-rounded p-4"
                                alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center justify-content-between gy-4">
                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <i class="ri-stack-line"></i>
                                    <div>
                                        <h4>Formação e Inserção profissional</h4>
                                        <p>Apoio a jovens e adultos na potencialização de suas habilidades para o mercado de
                                            emprego e auto emprego.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4>Proteção social</h4>
                                        <p>Promoção de actividades culturais, desportivas, jurídicas e acções concrectas nas
                                            comunidades que contribuam para o bem estar das familias vulneráveis. </p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="300">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4>Monitoria e Avaliação</h4>
                                        <p>Criação de ferramentas informáticas que facilitam a monitoria de acções, projectos e resultados.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4>Apoio Institucional</h4>
                                        <p>Realização de estudos que ajudem a orientar
                                            as estrategias de intervenção comunitária das OCB's.
                                            realização de formações em desenvolvimento institucional,
                                            elaboração de micro projectos e gestão financeira.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 mt-3">
                    <div class="row gx-0 mt-3">

                        <div class="col-lg-6 d-flex align-items-center aos-init aos-animate  " data-aos="zoom-out"
                            data-aos-delay="200">
                            <img src="{{ asset('website/images/uniadeMovel.jpg') }}" class="img-fluid rounded-3" alt="">
                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center  " data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="content bg-white" style="padding: 40px">

                                <h2>Unidade Móvel</h2>
                                <p>
                                    É uma brigada que visa levar os serviços socias as comunidades que
                                    localizam –se em zonas com menos acesso a transporte, a conhecimentos
                                    sobre a importância de se beneficiar destes serviços .
                                </p>


                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team">

        <div class="container  " data-aos="fade-up">

            <header class="section-header">
                <h2>Post's</h2>
                <p>Actividades recentes</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/tiptap.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Montagem de Tippy Taps,
                                senilização em parceria com a <strong><a
                                        href="https://www.essor-ong.org/">Essor</a></strong> e <strong><a
                                        href="https://www.ccm.org.mz/">CCM</a></strong> sobre a prevenção do COV19 com
                                recurso a cartazes para ajudar a comunidade a
                                estar seguro neste momento de crise que assola o pais.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/dicBi.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Apos o (longo) período de Estado de Emergência em Moçambique, onde diversos serviços ficaram
                                bloqueados, finalmente os Balcões de informação e orientação social e profissional podem
                                contar novamente com a DIC para a emissão de BI's.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/formacao_violencia.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p> Formação para os AOSP sobre direitos humanos e violência doméstica pela PNDH e também sobre
                                visitas domiciliares e atestados de pobreza pela Acção Social da Beira.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/limpeza_naPraia.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Limpeza das praias, plantação de arvores e educação cívica na cidade da Beira,  ajudando na
                                preservação do meio ambiente.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <section id="team" class="team">

        <div class="container  " data-aos="fade-up">

            <header class="section-header">
                <h2>Histórias de vida</h2>
                <p>Benificiários</p>
            </header>

        </div>

    </section>
@endsection
