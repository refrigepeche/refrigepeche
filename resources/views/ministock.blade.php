@extends('layouts.app')

@section('content')

<?php $imputation =DB::table('imputation')->get(); ?>
<div class="container">
        
    <form action="/ministock" method="POST">

            {{ csrf_field() }}
            
            <?php 
            if(isset($products)){
            foreach($products as $product){ ?>
                <input type="hidden" name="ref[]" value="{{$product}}">
            <?php }} ?>
    
    <h1>Mettre le nombre souhaité et la date pour la livraison</h1>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">numero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="numero">
    </div>
  </div>
  <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Fournisseur</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="fournisseur">
        </div>
      </div>
  <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre commandé</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nbr">
        </div>
      </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Date de livraison</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="date">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Imputation</label>
    <div class="col-sm-10">
        <select name="imputation" id="">
            <?php foreach ($imputation as $i){?>
                <option value="{{$i->imputation}}">{{$i->imputation}}</option>
            <?php } ?>
        </select>
    </div>
  </div>
  <a><button class="btn btn-primary" data-toggle="modal" href="#ignismyModal" type="submit">Envoyer</button></a>
</form>
</div>
<div class="container">
    <div class="row">
        
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
                            <h1>Votre demande a bien été enregistré</h1>
                            <h3 class="cupon-pop">Valideur: <span></span></h3><br /><br />
							<a href="{{url('/')}}" class="xyz"><button class="btn btn-sucess">Revenir à la page d'accueil</button></a>
							
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection