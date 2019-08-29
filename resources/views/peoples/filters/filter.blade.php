<div class="row">
  <div class="col-md-12">
    <div class="grid simple">
      <div class="grid-body no-border">
        <form action="{{ route('person.index') }}" method="get">
          <div class="row">

            <div class="col-md-4 col-xs-12 m-t-10">
              <div class="col-xs-12">
                <input type="text" name="name" class="form-control" placeholder="Nome / Razão Social">
              </div>
            </div>

            <div class="col-md-3 col-xs-12 m-t-10">
              <div class="col-xs-12">
                <input type="text" name="cpf_cnpj" class="form-control" placeholder="CPF / CNPJ">
              </div>
            </div>

            <div class="col-md-2 col-xs-12 m-t-10">
              <div class="col-xs-12">
                <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>

        <div class="row lines"></div>

        <div class="row m-t-10">
          <div class="col-md-12 pull-right">
            <a href="{{ route('person.create') }}" class="btn btn-sm btn-outline-primary pull-right">Cadastrar</a>  
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
