<!-- Modal Cadastrar Ticket -->
<div class="modal fade" id="modalNewTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Ticket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formNew">
            <div class="modal-body text-center">
                <div class="col-12 form-group">
                    <label for="titulo">Titulo:</label>                    
                    <input type="text" class="form-control" id="titulo" name="titulo" required>    
                </div>
                <div class="col-12 form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
                <button type="submit" class="btn btn-primary">Sim</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Modal Deletar Ticket -->
<div class="modal fade" id="modalDelTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deletar Ticket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formDelete">
            <div class="modal-body text-center">
                <p>Deseja mesmo deletar esse ticket ?</p>
                <input type="hidden" name="id_delete" id="id_delete">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
                <button type="submit" class="btn btn-primary">Sim</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Modal Editar Ticket -->
<div class="modal fade" id="modalEditTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Ticket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formEditTicket" novalidate>
            <div class="modal-body" id="modalEditarTicket">
                                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="./inc/login.php" method="POST" class="formLogin" novalidate>
            <div class="modal-body">
                <div class="col-12 form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" maxlength="250" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Por favor, digite seu email.</div>
                </div>

                <div class="col-12 form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Por favor, digite sua senha.</div>
                </div>                                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        </div>
    </div>
</div>