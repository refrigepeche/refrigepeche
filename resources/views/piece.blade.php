@extends('layouts.app')

@section('content')
<div>
    <div class="map">
        <iframe src="/map/{{$groupe}}/{{$groupe}}.html" frameborder="0"></iframe>
    </div>
    
    <div class="info">
        <?php
        if (isset($reference)){
            $piece = DB::table('BASE')
                ->where('REFERENCE_info_libre', $reference)
                ->get()
                ->first();
        ?>
        <div class="card">
            <div class="header">
                Nom: {{$piece->ANGLAIS_designation}} / {{$piece->DESIGN_Francais_langue2}}<br>
                Reference info libre: {{$reference}}<br>
                Code article: {{$piece->NCODE}}<br>
                Emplacement: {{$piece->EMPLACEMENT}}
            </div>
            <div class="body">
                <img src="/map/{{$groupe}}/image/{{$image}}.png" alt="IMAGE">
            </div>
            <?php if(url()->current() == 'http://127.0.0.1:8000/catalogue/HYDRAULIQUE/ref2965'){
                ?>
                <button type="button" data-toggle="modal" data-target="#sortie2" class="btn btn-secondary">Ajouter a la liste</button>
                <?php
            }
            else{
                ?>
                <button type="button" data-toggle="modal" data-target="#sortie" class="btn btn-secondary">Ajouter a la liste</button>
                <?php
            }
            ?>
            <a href="{{url('/formbon')}}">Bon de sortie</a>
            <a href="{{url('/filework')}}">Fiche de travail</a>
        </div>
        <?php }?>
    </div>
    <div style="clear:both;"></div>
</div>

<?php if (isset($reference)){?>
    <div class="modal fade" id="sortie">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Commande</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/api/commande" method="post">
                        <input type="hidden" name="reference" value={{$reference}}>
                        <input type="hidden" name="client" value="">
                        <div class="form-group">
                            <label for="quantite" class="form-control-label">Quantite</label>
                            <input type="number" class="form-control" name ="quantite" id="quantite">
                        </div>
                        <div class="form-group">
                            <label for="unite" class="form-control-label">Unité</label>
                            <select name="unite" id="unite" class="form-control">
                                <option value="pcs" selected>pièce</option>
                                <option value="m">mètre</option>
                                <option value="l">litre</option>
                                <option value="kg">kg</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-control-label">Date: {{date('d/m/y')}}</label>
                        </div>
                        <button type="submit" data-toggle="modal" href="#ignismyModal" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sortie2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Commande</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="reference" value={{$reference}}>
                        <input type="hidden" name="client" value="">
                        <div class="form-group">
                            <label for="quantite" class="form-control-label">Quantite</label>
                            <input type="number" class="form-control" name ="quantite" id="quantite">
                        </div>
                        <div class="form-group">
                            <label for="unite" class="form-control-label">Unité</label>
                            <select name="unite" id="unite" class="form-control">
                                <option value="pcs" selected>pièce</option>
                                <option value="m">mètre</option>
                                <option value="l">litre</option>
                                <option value="kg">kg</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Date: {{date('d/m/y')}}</label>
                        </div>
                        <a data-toggle="modal" data-target="#erreur"  class="btn btn-primary" ><button class="btn btn-primary">Valider</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="erreur">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Mini stoque atteint</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <a href="{{url('/ministock')}}/{{$reference}}"><button>Demande de nouveau stock</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

<div class="liste">
    <?php
    $items = DB::table('BASE')
        ->where('ECLATER_catalogue_4', 'like', '%'.$groupe.'%')
        ->orderBy('NCODE', 'asc')
        ->get();
    ?>
    <table>
        <thead>
            <tr>
                <th>NCODE</th>
                <th>REPERE info libre</th>
                <th>REFERENCE info libre</th>
                <th>Designation Anglais</th>
                <th>Designation Francais</th>
                <th>EMPLACEMENT</th>
            </tr>
        </thead>
    </table>
    <div class="body">
        <div class="card">
            <table>
                <tbody>
                    <?php
                    foreach ($items as $i){
                        if (isset($reference)){
                            if ($i->REFERENCE_info_libre == $reference){?>
                                <tr onclick="document.location='/catalogue/{{$groupe}}/{{$i->REFERENCE_info_libre}}'" style="border: solid red;">
                                    <td>{{$i->NCODE}}</td>
                                    <td>{{$i->REPERE_info_libre}}</td>
                                    <td>{{$i->REFERENCE_info_libre}}</td>
                                    <td>{{$i->ANGLAIS_designation}}</td>
                                    <td>{{$i->DESIGN_Francais_langue2}}</td>
                                    <td>{{$i->EMPLACEMENT}}</td>
                                </tr>
                    <?php
                            } else {
                    ?>
                                <tr onclick="document.location='/catalogue/{{$groupe}}/{{$i->REFERENCE_info_libre}}'">
                                    <td>{{$i->NCODE}}</td>
                                    <td>{{$i->REPERE_info_libre}}</td>
                                    <td>{{$i->REFERENCE_info_libre}}</td>
                                    <td>{{$i->ANGLAIS_designation}}</td>
                                    <td>{{$i->DESIGN_Francais_langue2}}</td>
                                    <td>{{$i->EMPLACEMENT}}</td>
                                </tr>
                        <?php
                            }
                        } else { ?>
                    <tr onclick="document.location='/catalogue/{{$groupe}}/{{$i->REFERENCE_info_libre}}'">
                        <td>{{$i->NCODE}}</td>
                        <td>{{$i->REPERE_info_libre}}</td>
                        <td>{{$i->REFERENCE_info_libre}}</td>
                        <td>{{$i->ANGLAIS_designation}}</td>
                        <td>{{$i->DESIGN_Francais_langue2}}</td>
                        <td>{{$i->EMPLACEMENT}}</td>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
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
                            <h1>Votre commande a été enregisté, voyez patienter</h1>
                            <h3 class="cupon-pop">Demandeur: <span></span></h3><br /><br />
							
							
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection