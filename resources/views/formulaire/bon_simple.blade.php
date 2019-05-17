@extends('layouts.app')

@section('content')

<script src="{{ URL::asset('js/validation.js') }}"></script>

        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BON DE SORTIE MAGASIN</h1>
<TABLE CELLPADDING=7 CELLSPACING=0 border=1>
	<tr>
		<td ROWSPAN=2 COLSPAN=2 WIDTH=157 HEIGHT=32>
			<IMG SRC="{{asset('/image/sary.png')}}" NAME="Image 2" ALIGN=BOTTOM WIDTH=158 HEIGHT=99 BORDER=0>
		</td>
		<td ROWSPAN=2 COLSPAN=2 WIDTH=247>
			<FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 16pt"><B>BON
			DE SORTIE/RETOUR MAGASIN</B></FONT></FONT>
		</td>
		<td ROWSPAN=2 WIDTH=43>
			<BR>
			
		</td>
		<td COLSPAN=2 WIDTH=221>
			Date&nbsp;: {{date('j/m/y')}}
		</td>
	</tr>
	<tr>
		<td COLSPAN=2 WIDTH=221>
			<FONT SIZE=4 STYLE="font-size: 16pt"><B>N° BS00000<?php $h=1;echo $h; ?></B></FONT>
		</td>
	</tr>
	<tr VALIGN=TOP>
		<td WIDTH=20>
			<B>N°</B>
		</td>
		<td WIDTH=123>
			<B>CODE MAGASIN</B>
		</td>
		<td WIDTH=201>
			<B>DESIGNATION ET REFERENCE</B>
		</td>
		<td WIDTH=31>
			<B>QTE</B>
		</td>
		<td WIDTH=43>
			<B>UNITE</B>
		</td>
		<td WIDTH=177>
			<B>UTILISATION / IMPUTATION</B>
		</td>
		<td WIDTH=30>
			<B>STK</B>
		</td>
	</tr>
	<?php
			use Illuminate\Support\Facades\DB;
			try{
				$attente = DB::table('BONS_p')->get();
			}
			catch (Exception $e) {
				return route('home');
			}
			$j=1;
            foreach ($attente as $i){
				
				$ncode = DB::table('BASE')->where('REFERENCE_info_libre', $i->ref)->get('NCODE')->first();
				$ncode = $ncode->NCODE;
                $designation = DB::table('BASE')->where('REFERENCE_info_libre', $i->ref)->get('DESIGN_Francais_langue2')->first();
                $designation = $designation->DESIGN_Francais_langue2;
            ?>
            <tr>
			<td WIDTH=20>{{$j}}</td>
			<td WIDTH=20>{{$ncode}}</td>
			<td WIDTH=20>{{$designation}} </td>
			<td WIDTH=20>{{$i->qte}}</td>
			<td WIDTH=20>{{$i->unite}}</td>
			<td WIDTH=20>{{$i->imputation}}</td>
			<td WIDTH=20></td>
            </tr>
            <?php $j++;} ?>
	
</TABLE>
<P ALIGN=CENTER STYLE="margin-left: 0.75in; margin-bottom: 0.14in"><FONT FACE="Cambria, serif"><FONT SIZE=4><U><B>BON
DE SORTIE MAGASIN</B></U></FONT></FONT>
<P STYLE="margin-bottom: 0.14in"><B>EMARGEMENT	VISA RESP. DE
SORTIE	VISA RECEPTIONNISTE	VISA VALIDATEUR</B>
<P STYLE="margin-bottom: 0.14in"><FONT SIZE=2 STYLE="font-size: 9pt"><I>Nom</I></FONT><B>&nbsp;</B><FONT SIZE=2 STYLE="font-size: 9pt"><I>:</I></FONT><B>
</B><FONT SIZE=3><B>…………………</B></FONT><B>.	</B><FONT SIZE=2 STYLE="font-size: 9pt"><I>transmis
ce</I></FONT><B>&nbsp;</B><FONT SIZE=1 STYLE="font-size: 8pt"><I>:</I></FONT><B>
……………………	</B><FONT SIZE=2 STYLE="font-size: 9pt"><I>Reçu
ce&nbsp;:</I></FONT><B> ………………..</B>
<P STYLE="margin-bottom: 0.14in"><FONT SIZE=2 STYLE="font-size: 9pt"><I>Signature</I></FONT><FONT SIZE=1 STYLE="font-size: 8pt"><I>&nbsp;</I></FONT><FONT SIZE=2 STYLE="font-size: 9pt"><I>:</I></FONT><B>
</B>

<P STYLE="margin-bottom: 0.14in"><A NAME="_GoBack"></A><BR><BR>

<P STYLE="margin-bottom: 0.14in"><BR><BR>
<a><button class="btn btn-success" data-toggle="modal" type="submit">Envoyer</button></a>
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
                            <h1>Votre bon de sortie a été enregistré</h1>
                            <h3 class="cupon-pop">Demandeur: <span></span></h3><br /><br />
							<a href="{{url('/')}}" class="xyz"><button class="btn btn-sucess">Revenir à la page d'accueil</button></a>
							
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
<?php $h++ ?>
@endsection


