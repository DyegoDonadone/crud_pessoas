<div class="row">
    <div class="col-md-4">
        <select name="class" id="person_tipe" class="form-control" required>
            <option value="">Selecione o Tipo</option>
            @foreach(config('helpers.people_type') as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row form_display">
    <div class="col-md-4 fisica">
    <label for="">Nome: <input type="text" name="name" class="form-control"/></label>
    </div>

    <div class="col-md-4 juridica">
    <label for="">Razão Social <input type="text" name="corporate_name" class="form-control"/></label>
    </div>

    <div class="col-md-2 fisica">
        <label for=""> Sexo: 
            <select name="sex" class="form-control">
                @foreach(config('helpers.sex') as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div class="col-md-4">
    <label for=""><span id="cpf_cnpj"></span>
        <input type="text" name="cpf_cnpj" class="cpf_cnpj all form-control"/>
    </label>
    </div>

    <div class="col-md-4 fisica">
        <label for="">RG: <input type="text" name="rg" class="form-control"/></label>
    </div>

    <div class="col-md-4">
    <label for=""><span id="datebirth_or_foundation"></span>
    <input type="date" name="datebirth_or_foundation" class="all form-control"/></label>
    </div>

    <div class="col-md-4 juridica">
    <label for=""> Nome Fantasia: <input type="text" name="fantasy_name" class="form-control"/></label>
    </div>

    <div class="col-md-4 juridica">
    <label for="">Inscrição Estadual: <input type="text" name="state_registration" class="form-control"/></label>
    </div>
</div>

<div class="row m-t-10">
    <div class="col-md-12">
        <input class="btn btn-sm btn-success" type="submit" value="Enviar"/>
    </div>
</div>

<script>
$('.form_display').addClass('hide');
$( document ).ready(function() {
    $('#person_tipe').change(function() {
        var i = $(this).val();
        $('.form_display').removeClass('hide');
        
        if(i == 0){
            $('.juridica').addClass('hide');
            $('.fisica').removeClass('hide');
            $('#cpf_cnpj').html('CPF: ');
            $('#datebirth_or_foundation').html('Data de Nascimento: ');
        } else {
            $('.juridica').removeClass('hide');
            $('.fisica').addClass('hide');
            $('#cpf_cnpj').html('CNPJ: ');
            $('#datebirth_or_foundation').html('Data de Fundação: ');
        }
    });
});


</script>

