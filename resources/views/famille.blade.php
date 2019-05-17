@extends('layouts.app')

@section('content')
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            Refrigepeche
        </div>
        <?php
        $famille_user = DB::table('users')->where('name', 'like', 'ialy')->pluck('familles');
        $pieces = explode(",", $famille_user[0]);
        $famille1 = $famille2= $famille3= $famille4= $famille5= $famille6= $famille7= $famille8= $famille9= false;
        foreach($pieces as $produit){
            if($produit=="0CLU"){$famille0= true;}
            if($produit=="1COG"){$famille1= true;}
            if($produit=="2EMB"){$famille2= true;}
            if($produit=="3FEC"){$famille3= true;}
            if($produit=="4IBU"){$famille4= true;}
            if($produit=="5MDP"){$famille5= true;}
            if($produit=="6POU"){$famille6= true;}
            if($produit=="7PDR"){$famille7= true;}
            if($produit=="8PCH"){$famille8= true;}
            if($produit=="9VAV"){$famille9= true;}
        }
        ?>
        <div class="links">
            <?php if($famille0==true){ ?>
            <a href="/famille/0">0CLU Carburants et Lubrifiants</a><br><br>
            <?php } if($famille1==true){ ?>
             <a href="/famille/1">1COG Combustibles et Gaz</a><br><br>
             <?php } if($famille2==true){ ?>
           <a href="/famille/2">2EMB Emballages</a><br><br>
           <?php } if($famille3==true){ ?>
            <a href="/famille/3">3FEC Fournitures et Consommables</a><br><br>
            <?php } if($famille4==true){ ?>
            <a href="/famille/4">4IBU Informatique et Bureautique</a><br><br>
            <?php } if($famille5==true){ ?>
            <a href="/famille/5">5MDP Matériels de Peche</a><br><br>
            <?php } if($famille6==true){ ?>
            <a href="/famille/6">6POU Petits Outillages</a><br><br>
            <?php } if($famille7==true){ ?>
           <a href="/famille/7">7PDR Pieces de Rechange</a><br><br>
           <?php } if($famille8==true){ ?>
            <a href="/famille/8">8PCH Produits Chimiques</a><br><br>
            <?php } if($famille9==true){ ?>
            <a href="/famille/9">9VAV Vivres et Ravitaillements</a><br><br>
            <?php } ?>
        </div>
    </div>
</div>
@endsection