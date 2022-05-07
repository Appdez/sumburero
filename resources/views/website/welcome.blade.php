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
                                    <p>É de promover o desenvolvimento sustentável de estratégias de acção que visam
                                        contribuir para a protecção Social da criança através de realização de pesquisas,
                                        assistência técnica, desenvolvimento de ferramentas informáticas para monitoria e
                                        avaliação dos projectos, mobilização de recursos e recolha de doações.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6  " data-aos="fade-left" data-aos-delay="200">
                            <div class="card no-border p-16-px">
                                <div class="card-body">
                                    <h3>Visão</h3>
                                    <p>É de uma sociedade que zela pelos direitos das suas crianças garantindo a estas o
                                        acesso a educação básica, a água e saneamento, aos cuidados de saúde materno
                                        infantil, a medicina preventiva, a protecção e ao lazer, promovendo assim um bom
                                        desenvolvimento psicossocial das crianças de Sofala.</p>
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
                                        <p>Visa apoiar jovens e adulta na potencialização de habilidades para o mercado e de
                                            emprego.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4>Proteção social</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="300">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4>Monitoria e Avaliação</h4>
                                        <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                    </div>
                                </div>

                                <div class="col-md-6 row  card no-border p-16-px mb-3" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4>Apoio Institucional</h4>
                                        <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
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
                                    localizam –se em zonas com difícil acesso a transporte, que tem menos conhecimentos
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
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                                exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit
                                corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates
                                enim aut architecto porro aspernatur molestiae modi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid
                                doloremque ut possimus ipsum officia.</p>
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

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                                exercitationem iure minima enim corporis et voluptate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit
                                corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">

                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates
                                enim aut architecto porro aspernatur molestiae modi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch  " data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('website/images/20210427_141541.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                          
                            <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid
                                doloremque ut possimus ipsum officia.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
