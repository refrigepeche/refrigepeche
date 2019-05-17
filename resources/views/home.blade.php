@extends('layouts.app')

@section('content')
<div class="container">
        <div class="title m-b-md">
            Refrigepeche
        </div>
        <div class="row">
            <div class="col-lg-12"><h2>Les techniciens et les salariés</h2></div>
            <div class="col-lg-6">
                <a href="/famille"><button>Famille</button></a>
            </div>
            <div class="col-lg-6">
                <a href=""><button>Catalogue</button></a>
            </div>
        </div>
            
            <div class="row">
                <div class="col-lg-12"><h2>Les magasiniers en tant que back office ou coopérateur</h2></div>
                <div class="col-lg-12 block-center"><button class="btnpers orange ">Gestion de sortie</button></div>
                
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <th colspan="2"><button class="btnpers bleu">Fiche de travail</button></th>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers gris">Liste</button></a></td>
                            <td><a href="#"><button class="btnpers">Créer</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers vert">Importer</button></a></td>
                            <td><a href="#"><button class="btnpers bleu2">Exporter</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Accepté</button></a></td>
                            <td><a href="#"><button class="btnpers">Refusé</button></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                            
                    </table>
                </div>
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <th colspan="2"><button class="btnpers bleu">Bon de sortie</button></th>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Liste</button></a></td>
                            <td><a href="#"><button class="btnpers">Créer</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Importer</button></a></td>
                            <td><a href="#"><button class="btnpers">Exporter</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Accepté</button></a></td>
                            <td><a href="#"><button class="btnpers">Refusé</button></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                                
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><button class="btnpers">Generation demande d'achat</button></div>
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <td><a href="#"><button class="btnpers">Imputation</button></a></td>
                            <td rowspan="2"><a href="#"><button class="btnpers">Nombre<br />commandé</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Date</button></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table>
                        <tr>
                            <td><a href="#"><button class="btnpers">Liste</button></a></td>
                            <td><a href="#"><button class="btnpers">Créer</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><button class="btnpers">Export</button></a></td>
                            <td><a href="#"><button class="btnpers">Import</button></a></td>
                        </tr>
                    </table>
                </div>          
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#"><button>Catalogue</button></a>
                </div>
                <div class="col-lg-6">
                    <a href="/famille"><button>Famille</button></a>
                </div>
            </div>
        
        <div class="row">
            <div class="col-lg-12"><h2>Les chefs d’ateliers en tant qu’approbateur</h2></div>
        </div>
        <div class="row">
                <div class="col-lg-6">
                        <table>
                            <tr>
                                <th colspan="2"><button class="btnpers">Fiche de travail<button></th>
                            </tr>
                            <tr>
                                <td><a href="#"><button class="btnpers">Liste</button></a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><a href="#"><button class="btnpers">Importer</button></a></td>
                                <td><a href="#"><button class="btnpers">Exporter</button></a></td>
                            </tr>                            
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table>
                            <tr>
                                <th colspan="2"><button class="btnpers">Bon de sortie</button></th>
                            </tr>
                                    
                        </table>
                    </div>
        </div>
                
                <div class="row">
                    
                    <div class="col-lg-6">
                            <button class="btnpers d-flex justify-content-center">Generation demande d'achat</button>
                        <table>
                            <tr>
                                <td><a href="#"><button class="btnpers">Liste</button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><button class="btnpers">Export</button></a></td>
                                <td><a href="#"><button class="btnpers">Import</button></a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                            <button class="btnpers">Création Fiche de travail</button>
                            <table>
                                <tr>
                                    <td><a href="#"><button class="btnpers">Liste</button></a></td>
                                </tr>
                                <tr>
                                    <td><a href="#"><button class="btnpers">Export</button></a></td>
                                    <td><a href="#"><button class="btnpers">Import</button></a></td>
                                </tr>
                            </table>
                        </div>          
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#"><button>Catalogue</button></a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/famille"><button>Famille</button></a>
                    </div>
                </div>
                <div class="row">
                    <button>Outils statistique</button>
                </div>
                <div class="row">
                        <div class="col-lg-12"><h2 class="d-flex justify-content-center">La direction et certains chef de services en tant que valideur</h2></div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <th colspan="2"><button class="btnpers">Fiche de travail<button></th>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><button class="btnpers">Liste</button></a></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><button class="btnpers">Importer</button></a></td>
                                            <td><a href="#"><button class="btnpers">Exporter</button></a></td>
                                        </tr>                            
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <th colspan="2"><button class="btnpers">Bon de sortie</button></th>
                                        </tr>
                                                
                                    </table>
                                </div>
                    </div>
                            
                            <div class="row">
                                
                                <div class="col-lg-6">
                                        <button class="btnpers">Generation demande d'achat</button>
                                    <table>
                                        <tr>
                                            <td><a href="#"><button class="btnpers">Liste</button></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><button class="btnpers">Export</button></a></td>
                                            <td><a href="#"><button class="btnpers">Import</button></a></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                        <button class="btnpers">Création Fiche de travail</button>
                                        <table>
                                            <tr>
                                                <td><a href="#"><button class="btnpers">Liste</button></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><button class="btnpers">Export</button></a></td>
                                                <td><a href="#"><button class="btnpers">Import</button></a></td>
                                            </tr>
                                        </table>
                                    </div>          
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#"><button>Catalogue</button></a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="/famille"><button>Famille</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <button>Outils statistique</button>
                            </div>

</div>
@endsection