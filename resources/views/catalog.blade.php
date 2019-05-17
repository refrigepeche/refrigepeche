@extends('layouts.app')

@section('content')
<div class="flex-center position-ref">
    <div class="content">
        <?php
        if (isset($famille)){
            try {
                $cat1 = explode(",",$user->cat1);
            } catch (\Throwable $th) {
                //throw $th;
            }

        ?>
            <div class="title m-b-md">
                Catalogue1
            </div>
            <div class="links">
                <?php
                if (isset($cat1) && ($cat1[0]!="")){
                    foreach ($cat1 as $i){ ?>
                        <br><a href="/catalog1/{{$i}}" class="btn btn-success"><button class="btn btn-success">{{$i}}</button></a><br />
                <?php
                    }
                }else{
                    foreach ($famille as $i) { ?>
                        <br><a href="/catalog1/{{$i->CATALOG1}}" class="btn btn-success"><button class="btn btn-success">{{$i->CATALOG1}}</button></a><br />
                <?php
                    }
                } ?>
            </div>
        <?php } ?>

        <?php
        if (isset($catalog1)){
            try {
                $cat2 = explode(",",$user->cat2);
            } catch (\Throwable $th) {
                //throw $th;
            }
        ?>
            <div class="title m-b-md">
                Catalogue2
            </div>
            <div class="links">
                <?php
                if (isset($cat2) && ($cat2[0]!="")){
                    foreach ($cat2 as $i){ ?>
                        <br><a href="/catalog2/{{$i}}" class="btn btn-success"><button class="btn btn-success">{{$i}}</button></a><br />
                <?php
                    }
                }else{
                    foreach ($catalog1 as $i) { ?>
                        <br><a href="/catalog2/{{$i->CATALOG2}}" class="btn btn-success"><button class="btn btn-success">{{$i->CATALOG2}}</button></a><br />
                <?php
                    }
                } ?>
            </div>
        <?php } ?>

        <?php if (isset($catalog2)){?>
            <div class="title m-b-md">
                Eclater
            </div>
            <div class="links">
                <?php foreach ($catalog2 as $i) {
                    $temp =  $i->ECLATER_catalogue_4;
                    $temp = preg_replace("/[^a-zA-Z\s]/", "", $temp);
                    $temp = trim($temp);
                ?>
                    <br><a href="/catalogue/{{$temp}}" class="btn btn-success"><button class="btn btn-success">{{$temp}}</button></a><br />
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
@endsection