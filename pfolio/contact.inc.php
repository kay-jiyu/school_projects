<section id="Contact" class="reveal">
    <div class="dm">
        <h2>Contact</h2>

            <?php if(isset($_GET['pg']) && $_GET['pg'] == 'ok'): ?>
                    <p style="color: #ff007f; font-weight: bold; text-shadow: 0 0 5px #ff007f;">
                        Votre message a bien été enregistré !
                    </p>
            <?php endif; ?>

                    <form id="contact-form" method='post' action='index.php?pg=ins'>
                        <input type="text" placeholder="Nom" required name='nom'>
                        <input type="email" placeholder="Email" required name='email'>
                        <textarea placeholder="Votre message" rows="5" required name='msg'></textarea>
                        <button class="but" type="submit">Envoyer le message</button>
                    </form>

                <div class="reseaux">
                    <a href="https://www.facebook.com/Venkay147?mibextid=ZbWKwL"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="tiktok.com/@Venance147"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="instagram.com/venancekayode"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://discord.gg/YmYBYunZ"><i class="fa-brands fa-discord"></i></a>
                    <a href="https://wa.me/qr/Y7POZBT5PNPBN1"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </section>