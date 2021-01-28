<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="mt-0 text-center">Contácteme</h2>
        <hr class="my-4 divider primary">
        <!-- Contact Section Form-->
        <div class="row">
            <div class="mx-auto col-lg-8">

                <form id="contactForm"   method="POST" action="{{ route('contact.me') }}">
                    @csrf
                    <div class="control-group">
                        <div class="mb-0 form-group floating-label-form-group controls">
                            <label>Nombre</label>
                            <input class="form-control" id="name" type="text" placeholder="Nombre" required name="name" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="mb-0 form-group floating-label-form-group controls">
                            <label>Ccorreo electrónico</label>
                            <input class="form-control" id="email" type="email" placeholder="Correo electrónico" required name="email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="mb-0 form-group floating-label-form-group controls">
                            <label>Número telefónico</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Número telefónico" required name="phone" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="mb-0 form-group floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required" name="content" ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Enviar</button></div>
                </form>
                <div class="">
                    <p id="status"></p>
                </div>
            </div>
        </div>
    </div>
</section>
