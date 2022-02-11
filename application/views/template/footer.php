
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>" 
crossorigin="anonymous"></script>


<div id="sucesso" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">.: Cadastro :.</h5>
            </div>
            <div class="modal-body">
                <p>Cadastro efetuado com sucesso.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="err" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">.: Cadastro :.</h5></font>
            </div>
            <div class="modal-body">
                <p>Erro ao cadastrar.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="trueUpModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">.: Atualização :.</h5>
            </div>
            <div class="modal-body">
                <p>Cadastro atualizado com sucesso.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="errUpModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">.: Atualização :.</h5></font>
            </div>
            <div class="modal-body">
                <p>Erro ao atualizar cadastro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="trueDelModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">.: Excluir :.</h5>
            </div>
            <div class="modal-body">
                <p>Cadastro deletado com sucesso.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="errDelModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">.: Excluir :.</h5></font>
            </div>
            <div class="modal-body">
                <p>Erro ao excluir cadastro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="errLogin" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <font color="red"><h5 class="modal-title">.: Login :.</h5></font>
            </div>
            <div class="modal-body">
                <p>Erro ao logar na aplicação.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
if ($this->session->tempdata('msg') == 'true') {
    ?>
    <script type="text/javascript">
        $('#sucesso').modal('show');
    </script>
<?php } else if ($this->session->tempdata('msg') == 'err') { ?>
    <script type="text/javascript">
        $('#err').modal('show');
    </script>
<?php } else if ($this->session->tempdata('msg') == 'trueUp') { ?>
    <script type="text/javascript">
        $('#trueUpModal').modal('show');
    </script>
<?php } else if ($this->session->tempdata('msg') == 'errUp'){ ?>
    <script type="text/javascript">
        $('#errUpModal').modal('show');
    </script>
<?php } else if ($this->session->tempdata('msg') == 'trueDel') { ?>
    <script type="text/javascript">
        $('#trueDelModal').modal('show');
    </script>
<?php } else if ($this->session->tempdata('msg') == 'errDel') { ?>
    <script type="text/javascript">
        $("#errDelModal").modal('show');
    </script>
<?php } else if ($this->session->userdata('logado') == 'err') {?>
    <script type="text/javascript">
        $("#errLogin").modal('show');
    </script>
<?php } ?>
</body>
</html>