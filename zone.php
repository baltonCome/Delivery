<?php

include __DIR__.'/util/header.php';
?>
    <main>
        <iframe src="https://www.google.com/maps/d/embed?mid=1_mYnDYAcV2M78h-A1uEB2RFGz3_2DIdt" width="640" height="480"></iframe>
        
    </main>

        </main>
        <main>
            <!--<iframe src="https://www.google.com/maps/d/embed?mid=1_mYnDYAcV2M78h-A1uEB2RFGz3_2DIdt" width="640" height="480"></iframe>-->
            <section class="section py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="section-title">
                                Entre em Contacto e veja o mapa da nossa area de cobertura
                            </p >
                            <div class="underline mr-auto ml-auto mb-2"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-8">
                                    <iframe src="https://www.google.com/maps/d/embed?mid=1_mYnDYAcV2M78h-A1uEB2RFGz3_2DIdt" width="100%" height="480"></iframe>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card border-light py-4">
                                            <div class="card-body border-ligh">
                                                <h4>Entre em Contacto</h4>
                                                <form>
                                                    <div class="form-group py-3">

                                                        <input id="name" type="text" class="form-control" placeholder="Nome">
                                                    </div>

                                                    <div class="form-group">

                                                        <input id="email" type="email" class="form-control" placeholder="Email">
                                                    </div>

                                                    <div class="form-group py-3">

                                                        <input id="subject" type="text" class="form-control" placeholder="Titulo">
                                                    </div>

                                                    <div class="form-group py-3">

                                                        <textarea id="body" name="" class="form-control" rows="5" placeholder="Messagem"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block enviar" onclick="sendEmail()" value="Send An Email">Enviar Messagem</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            function sendEmail() {
                var name = $("#name");
                var email = $("#email");
                var subject = $("#subject");
                var body = $("#body");

                if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                    $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success: function (response) {
                            $('#myForm')[0].reset();
                            $('.sent-notification').text("Message Sent Successfully.");
                    }
                    });
                }
            }

            function isNotEmpty(caller) {
                if (caller.val() == "") {
                    caller.css('border', '1px solid red');
                    return false;
                } else
                    caller.css('border', '');

                return true;
            }
        </script>

    </body>

<?php
include __DIR__.'/util/footer.php';
?>