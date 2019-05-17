@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Insertion Utilisateur</h2>
    <form method="POST">
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" name="name">
      </div>
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Adresse e-mail" aria-label="email" name="email">
      </div>
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Service" aria-label="service" name="service">
      </div>
      <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe" aria-label="password" name="password">
      </div>
      <div class="input-group mb-3">
              <p><h4>Famille:</h4>&nbsp;</p>
              <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="check_famille[]" value="0CLU">
                  <label class="form-check-label">0CLU</label>&nbsp;&nbsp;
              </div>
              <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="check_famille[]" value="1COG">
                      <label class="form-check-label">1COG</label>&nbsp;&nbsp;
              </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_famille[]" value="2EMB">
              <label class="form-check-label">2EMB</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_famille[]" value="3FEC">
              <label class="form-check-label">3FEC</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_famille[]" value="4IBU">
              <label class="form-check-label">4IBU</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="check_famille[]" value="5MDP">
                  <label class="form-check-label">5MDP</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="check_famille[]" value="6POU">
                  <label class="form-check-label">6POU</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="check_famille[]" value="7PDR">
                  <label class="form-check-label">7PDR</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_famille[]" value="8PCH">
              <label class="form-check-label">8PCH</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_famille[]" value="9VAV">
              <label class="form-check-label">9VAV</label>&nbsp;&nbsp;
          </div>
      </div>
      <div class="input-group mb-3">
          <p><h4>Menu:</h4>&nbsp;</p>
          <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu0">
              <label class="form-check-label">Article</label>&nbsp;&nbsp;
          </div>
          <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu1">
                  <label class="form-check-label">Structure</label>&nbsp;&nbsp;
          </div>
      <div class="form-check">
          <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu2">
          <label class="form-check-label">Edition</label>&nbsp;&nbsp;
      </div>
      <div class="form-check">
          <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu3">
          <label class="form-check-label">Parametrage et configuration</label>&nbsp;&nbsp;
      </div>
      <div class="form-check">
          <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu4">
          <label class="form-check-label">Commande</label>&nbsp;&nbsp;
      </div>
      <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu5">
              <label class="form-check-label">Codebarre</label>&nbsp;&nbsp;
      </div>
      <div class="form-check">
              <input type="checkbox" class="form-check-input" name="check_menu[]" value="menu6">
              <label class="form-check-label">Panier</label>&nbsp;&nbsp;
      </div>
      <div class="input-group mb-3">
            <div class="form-group">
                    <select class="custom-select" name="type_user">
                      <option value="">Type d'utilisateur</option>
                      <option value="Les techniciens et les salariés">Les techniciens et les salariés</option>
                      <option value="Les magasiniers en tant que back office ou coopérateur">Les magasiniers en tant que back office ou coopérateur</option>
                      <option value="Les chefs d’ateliers en tant qu’approbateur">Les chefs d’ateliers en tant qu’approbateur</option>
                      <option value="La direction et certains chefs de service en tant que validateur">La direction et certains chefs de service en tant que validateur</option>
                      <option value="Administrateur">Administrateur</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                  </div>
      </div>
      
      {{ csrf_field() }}
      <button class="btn btn-primary" type="submit">Valider</button>
    </form>
    </div>
      
    </div>

@endsection