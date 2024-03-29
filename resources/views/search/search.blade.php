<!DOCTYPE html>
<html>
    <head>
        <title>search</title>
        {!!Html::style('resources/assets/search/bootstrap.css')!!}
        {!!Html::style('resources/assets/search/bootstrap.min.css')!!}
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/jquery-1.11.4.js"></script>
        

       <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
</head>
<body>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <section class="panel panel-default">
                <header class="panel-heading">
                    <input type="text" name="search" class="form-control" id="search" placeholder="Search">
</header>
<div classe="panel-body">
<div class="form-group">
{!! Form::open(array('route'=>'fonctionnaire.store'))!!}
               {!! Form::label('Numero de badge','Entrez le numéro de badge') !!}
               {!! Form::text('badgenumber',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Nom','Entrez le nom') !!}
               {!! Form::text('nom',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Prenom','Entrez le prénom') !!}
               {!! Form::text('prenom',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Fonction','Entrez la fonction') !!}
               {!! Form::text('fonction',null,['class'=>'form-control']) !!}

              </div>

                  <div class="form-group">
               {!! Form::label('Division','Entrez la division') !!}
               {!! Form::text('division',null,['class'=>'form-control']) !!}

              </div>
              
              <div class="form-group">
               {!! Form::label('Genre','Entrez le genre') !!}
               {!! Form::text('genre',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('CIN','Entrez le CIN') !!}
               {!! Form::text('CIN',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Service','Entrez le service') !!}
               {!! Form::text('service',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d affectation','Entrez la Date d affectation') !!}
               {!! Form::date('date_affectation',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d entrée à l administration','Entrez la Date d entrée à l administration') !!}
               {!! Form::date('date_entree_administration',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Grade','Entrez le Grade') !!}
               {!! Form::text('grade',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date du grade','Entrez la date du grade') !!}
               {!! Form::date('date_grade',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Echelle','Entrez l Echelle') !!}
               {!! Form::text('echelle',null,['class'=>'form-control']) !!}

              </div>

               <div class="form-group">
               {!! Form::label('Echelon','Entrez l Echelon') !!}
               {!! Form::text('echelon',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d echelon','Entrez la date d echelon') !!}
               {!! Form::date('date_echelon',null,['class'=>'form-control']) !!}

              </div>

                <div class="form-group">
               {!! Form::label('Situation familiale','Entrez la situation familiale') !!}
               {!! Form::text('situation_familiale',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Budget','Entrez le budget') !!}
               {!! Form::text('budget',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Niveau scolaire','Entrez le niveau scolaire') !!}
               {!! Form::text('niveau_scolaire',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nombres d enfants','Entrez le nombre d enfants') !!}
               {!! Form::text('nombre_enfants',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom complet de conjoint','Entrez le Nom complet de conjoint') !!}
               {!! Form::text('nom_complet_conjoint',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Fonction de conjoint','Entrez la Fonction de conjoint') !!}
               {!! Form::text('fonction_conjoint',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Diplome','Entrez le diplome') !!}
               {!! Form::text('diplome',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom père','Entrez le nom du père') !!}
               {!! Form::text('nom_pere',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom mère','Entrez le nom du mère') !!}
               {!! Form::text('nom_mere',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Remarque','Entrez une remarque') !!}
               {!! Form::text('remarque',null,['class'=>'form-control']) !!}

              </div>
        
              {!! Form::close() !!}
         
</div>
</section>
</div>
</div>
</body>
<script type="text/javascript">
 $('#cherchernom').chercher({
    source : '{!!URL::route('chercher')!!}',
    minlenght:1,
    autoFocus:true,
    select:function(e,ui){
        alert(ui);
    }

  
});
</script>
</html>
               <!--     <h3>Les informations du fonctionnaire</h3>
</div>
<div class="panel-body">
    <div class="form-group">
        <input type="text" class="form-control" id="search" name="search"></input>
</div>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Numero de badge</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
                <th>Division</th>
                <th>Genre</th>
                <th>CIN</th>
                <th>Service</th>
                <th>Date d'affectation</th>
                <th>Date d'entrée à l'administration</th>
                <th>Grade</th>
                <th>Date du grade</th>
                <th>Echelle</th>
                <th>Echelon</th>
                <th>Date d'echelon</th>
                <th>Situation familiale</th>
                <th>Budget</th>
                <th>Niveau scolaire</th>
                <th>Nombres d'enfants</th>
                <th>Nom complet de conjoint</th>
                <th>Fonction de conjoint</th>
                <th>Diplome</th>
                <th>Nom père</th>
                <th>Nom mère</th>
                <th>Remarque</th>
                
</tr>
    </thead>
    <tbody>
</tbody>


</table>
</div>
</div>
</div>
</div>
<script type="text/javascript">
       $('#chercher').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
        type : 'get',
        url : '{{URL::to('chercher')}}',
        data : {'chercher':$value},
        success:function(data){
            $('tbody').html(data);
        }
    });
})
</script>
</body>
</html>-->