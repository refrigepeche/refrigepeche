@extends('layouts.app')

@section('content')
<script src="{{ URL::asset('js/validation.js') }}"></script>
<form action="" method="POST">
<div class="liste">
    <table id="t1">
        <thead>
            <th>Imputation</th>
            <th>Demandeur</th>
            <th>Reference</th>
            <th>Designation</th>
            <th>Quantite</th>
            <th>Unite</th>
            <th>Date</th>
            <th>Accepter</th>

        </thead>
        <tbody>
            <?php
            use Illuminate\Support\Facades\DB;
            $attente = DB::table('BONS')->get();
            foreach ($attente as $i){
                $designation = DB::table('BASE')->where('REFERENCE_info_libre', $i->ref)->get('DESIGN_Francais_langue2')->first();
                $designation = $designation->DESIGN_Francais_langue2;
            ?>
            <tr>
            {{ csrf_field() }}
                <td>{{$i->imputation}}</td>
                <td>{{$i->client}}</td>
                <td>{{$i->ref}}</td>
                <td>{{$designation}}</td>
                <td>{{$i->qte}}</td>
                <td>{{$i->unite}}</td>
                <td>{{$i->date}}</td>
                <!--<td><a href="/api/validation/{{$i->id}}">Valider</a></td>
                <td><a href="/api/refus/{{$i->id}}">Refuser</a></td>-->
                <td><input type="checkbox" name="checker[{{$i->ref}}]"/><td>
            </tr>
            <?php } ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn btn-success" type="sumbit">Valider</button></td><td><button type="reset" class="btn btn-danger">Annuler</button></td>
            </tr>
        </tbody>
    </table>
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
                            <h1>Votre validation a bien été enregistré</h1>
                            <h3 class="cupon-pop">Valideur: <span>{{Auth::user()->name}}</span></h3><br /><br />
							<a href="{{url('/')}}" class="xyz"><button class="btn btn-sucess">Revenir à la page d'accueil</button></a>
							
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection