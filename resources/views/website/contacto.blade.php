@extends('website.layouts.website')
@section('title', 'Contacto')
@section('content')

    <div class="ratio ratio-21x9 pt-0 mt-0 w-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3210.423721597345!2d34.879508314527655!3d-19.847390640870316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f2a411013bc44c3%3A0xf84491837f778886!2sESSOR%20MACUTI!5e1!3m2!1spt-PT!2smz!4v1652065479365!5m2!1spt-PT!2smz"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="bg-white">

        <div class="container p-5" data-aos="fade-up">

            <header class="section-header">
                 <h2>Contacte - nos</h2>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Localização</h3>
                                <p>Rua Condestável 1,783 <br>Beira, Sofala, Moçambique</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telefone</h3>
                                <p>+258 84 595 0861 55<br>+258 86 595 0861 55</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>Geral.sumburero@gmail.com<br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Horário</h3>
                                <p>Segunda - Sexta<br>8:00AM - 04:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="" method="get" class="php-email-form">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Teu nome" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Teu email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="mensagem" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                              
 
                                <button type="submit" class="btn btn-secondary btn-rounded py-2 px-4">Enviar mensagem</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->
@endsection
