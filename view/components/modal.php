<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Encomenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="https://formsubmit.co/ryanmarcos902@gmail.com" method="POST">
                    <input type="hidden" name="_next" value="http://localhost/ryan_joao/">
                    <input type="hidden" name="_captcha" value="false">


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Entre em contato:</label>
                    </div>
                    <div class="mb-3">
                        <label for="email-name" class="col-form-label"> Informe o seu e-mail:</label>
                        <input type="text" class="form-control" name="email" id="email-name">
                    </div>
                    <div class="mb-3">
                        <label for="name-name" class="col-form-label">Seu Nome</p></label>
                        <input type="text" class="form-control" name="name" id="name-name">
                    </div>
                    <div class="mb-3">
                        <label for="tel-text" class="col-form-label">Seu Telefone:</label>
                        <input type="text" name="telefone" class="form-control" id="tel-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-name" class="col-form-label">Por favor, Diga a cor que deseja a seguir:</label>
                        <input type="text" name="Produto" class="form-control" id="message-name" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="liveToast" onclick="show()">Confirmar
                            pedido</button>
                </form>
            </div>
        </div>
    </div>
</div>