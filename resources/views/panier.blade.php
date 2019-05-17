@extends('layouts.app')

@section('content')
<script src="{{ URL::asset('js/validation.js') }}"></script>
<h1 class="d-flex justify-content-center">Les commandes à valider</h1>
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
            $attente = DB::table('panier_bon')->get();
            $imputation =DB::table('imputation')->get();
            foreach ($attente as $i){
                $designation = DB::table('BASE')->where('REFERENCE_info_libre', $i->ref)->get('DESIGN_Francais_langue2')->first();
                $designation = $designation->DESIGN_Francais_langue2;
            ?>
            <tr>
            {{ csrf_field() }}
                <td>
                </td>
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
                <td height='200px'><select name="imputation" id="" class="form-control">
                    <?php foreach ($imputation as $i){?>
                        <option value="{{$i->imputation}}">{{$i->imputation}}</option>
                    <?php } ?>
                    </select></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <select name="selection" id="" class="form-control">
                        <option value="Bon_de_sortie_simple">Bon de sortie simple</option>
                        <option value="Fiche_de_travail">Fiche de travail</option>
                        <option value="Demande_achat">Demande d'achat</option>
                    </select>
                </td>
                <td><button class="btn btn-primary" type="sumbit">Valider</button></td><td><button type="reset" class="btn btn-danger">Annuler</button></td>
            </tr>
            <tr>
                <th colspan=8><h2>Liste des Bons de sortie</h2></th>
            </tr>
            <tr>
                    <td colspan="3"><a href="/formulaire/formbon"><button class="btn btn-info" type="sumbit">List Bon de sortie simple</button></a></td>
                    <td colspan="3"><a href="/formulaire/formbon"><button class="btn btn-info" type="sumbit">List Fiche de travail</button></a></td>
                    <td colspan="2"><a href="/formulaire/formbon"><button class="btn btn-info" type="sumbit">List Demande d'achat</button></a></td>
                    <td></td>
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
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection