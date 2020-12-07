<footer>
        <div class="footer">
            <div class="footer-left">
                <p class="about">
                    A criação de uma fundação municipal de cultura pode ser uma alternativa eficaz para a implantação de
                    políticas culturais que correspondem as aspirações da sociedade, o autor aborda os cuidados; os
                    resultados e as experiências. Com o objetivo de promover, incentivar, difundir e valorizar a cultura
                    e as artes na cidade.
                </p>
            </div>
            <div class="footer-right">
                <div>
                    <ft>Contato</ft>
                    <i class="fas fa-compass"></i>
                    <p>
                        Av. Tancredo Neves - n° 3845
                        <span>Vilhena, Rondônia - 76980-731</span>
                    </p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>(69) 3321-1777</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:fundacaoculturaldevilhena@gmail.com">fundacaoculturaldevilhena@gmail.com</a></p>
                </div>
                <hr class="horizontal">
                <div class="social-media">
                    <ft>Redes Sociais</ft>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
                <hr class="horizontal">
                <div class="partners">
                    <ft>Parceiros</ft>
                    <?php $template_directory_vx = get_template_directory_uri(); ?>
                    <img src="<?php echo $template_directory_vx;?>/assets/image/logo/vortex_logo.png" width="50" height="50">
                    <?php $template_directory_ls = get_template_directory_uri(); ?>
                    <img src="<?php echo $template_directory_ls;?>/assets/image/logo/fslab_logo.png" width="50" height="50">
                    <?php $template_directory_if = get_template_directory_uri(); ?>
                    <img src="<?php echo $template_directory_if;?>/assets/image/logo/ifro_logo.png" width="50" height="50">
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>