
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
			<div class="container">
    <h1 class="text-center mt-3">buletin d inscription </h1> <br>
    <p>  Année Universitaire : 2022 - 2023</p>
  <div class="container">
  <form name="Form" action="/store" method="post">
      {{ csrf_field() }}
   <input type="radio" name="genre" value="Mme"  checked> Mme <br />
   <input type="radio" name="genre" value="Mlle"> Mlle <br />
   <input type="radio" name="genre" value="Mr"> Mr <br /><br />
   </div>
    <h2 class="text-center mt-3">Student Registration Form</h2>
             
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control @error('Username')  is-invalid  @enderror" id="Username" type="text" name="nom" placeholder="Username" required="" value="{{ old('Username') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
           <div class="mb-3">
            <label for="lastname" class="form-label">Prénom</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="text" name="prenom" placeholder="Prénom" required="" value="{{ old('lastname') }}">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>       
        <div class="mb-3">
            <label for="lastname" class="form-label">Numéro cellulaire</label>
            <input type="text" class="form-control @error('lastname')  is-invalid  @enderror" id="lastname" type="text" name="numero" placeholder="Prénom" required="" value="{{ old('lastname') }}">
            @error('lastname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>   
        <div class="mb-3">
            <label for="birthday" class="form-label">date de naissance</label>
            <input type="date" class="form-control @error('birthday')  is-invalid  @enderror" id="birthday" type="birthday" name="naissance" placeholder="date de naissance" required="" value="{{ old('birthday') }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>  
        <div class="mb-3">
            <label for="city" class="form-label">lieu de naissance</label>
            <input type="text" class="form-control @error('city')  is-invalid  @enderror" id="city" type="city" name="lieu" placeholder="lieu de naissance" required="" value="{{ old('city') }}">
            @error('birthday')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" class="form-control @error('email')  is-invalid  @enderror" id="email" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>          
	
        <div class="mb-3">
            <label for="Niveau Scolaire " class="form-label">Niveau Scolaire </label>
            <div class="dropdown">

            <input type="text" class="form-control @error('Niveau Scolaire')  is-invalid  @enderror" id="Niveau Scolaire " type="Niveau Scolaire " name="Niveau_Scolaire" placeholder="Niveau Scolaire " required="" value="{{ old('Niveau Scolaire ') }}">
            @error('Niveau Scolaire ')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div> 
         <div class="mb-3">
            <label for="Profession" class="form-label">Profession/ Etudes </label>
            <input type="text" class="form-control @error('Profession')  is-invalid  @enderror" id="Profession" type="Profession" name="Profession" placeholder="Profession" required="" value="{{ old('Profession') }}">
            @error('Profession')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="sante" class="form-label">Maladies/ Allergies </label>
            <select class="select" name="maladies">
              <option value="Diabète de type 1 et diabète de type 2">Diabète de type 1 et diabète de type 2</option>
              <option value="Maladie coronaire">Maladie coronaire </option>
              <option value="Paraplégie">Paraplégie</option>
              <option value="AUTRES">AUTRES </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Urgence" class="form-label">Contact d'urgence </label>
            <input type="text" class="form-control @error('Urgence')  is-invalid  @enderror" id="Profession" type="Profession" name="urgence" placeholder="Contact d'urgence" required="" value="{{ old('Profession') }}">
            @error('Urgence')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <h1>Formation Professionnelle « Mini MBA » et « Masterclass »</h1>
        <p> DES (09 Mois de Formation à base de Projets Pratiques)  </p>
        <input type="checkbox" id="payement" name="formation1" value="Management des Entreprises" >
        <label for="payement">Management des Entreprises</label><br />
        <input type="checkbox" id="payement" name="formation2" value="Management et marketing évènementiel">
        <label for="payement">Management et marketing évènementiel</label><br />
        <input type="checkbox" id="payement" name="formation3" value="Gestion des ressources Humaines">
        <label for="payement">Gestion des ressources Humaines</label><br />
        <input type="checkbox" id="payement" name="formation4" value="Commerce International">
        <label for="payement">Commerce International</label><br />
        <input type="checkbox" id="payement" name="formation5" value="Comptabilité et Finances">
        <label for="payement">Comptabilité et Finances</label><br />
      </div>
      <div class="mb-3">
              <p> Masterclass (07 Mois à base de Projets pratiques)  </p>
          
        <input type="checkbox" id="payement" name="formation6" value="Photographie Professionnelle">
        <label for="payement">Photographie Professionnelle</label><br />
        <input type="checkbox" id="payement" name="formation7" value="Motion graphique Design">
        <label for="payement">Motion graphique Design</label><br />
        <input type="checkbox" id="payement" name="formation8" value="Web Design UI/UX">
        <label for="payement">Web Design UI/UX </label><br />
        <input type="checkbox" id="payement" name="formation9" value="Développement Web">
        <label for="payement">Développement Web </label><br />
        <input type="checkbox" id="payement" name="formation10" value="Développement Application Mobile">
        <label for="payement">Développement Application Mobile</label><br />
        <input type="checkbox" id="payement" name="formation11" value="Design graphique (PAO)">
        <label for="payement">Design graphique (PAO)</label><br />
        <input type="checkbox" id="payement" name="formation12" value="Design d’intérieur">
        <label for="payement">Design d’intérieur</label><br />
        
      </div>
      <div class="mb-3">
          <p> Mini MBA (144 heures à base de Projets Pratiques) </p>
          <input type="checkbox" id="payement" name="formation13" value="Community Management">
          <label for="payement">Community Management</label><br />
          <input type="checkbox" id="payement" name="formation14" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation15" value="Copywriting et Rédaction Web">
          <label for="payement">Copywriting et Rédaction Web</label><br />
          <input type="checkbox" id="payement" name="formation16" value="Marketing Digital">
          <label for="payement">Marketing Digital</label><br />
          <input type="checkbox" id="payement" name="formation17" value="Publicité et Branding">
          <label for="payement">Publicité et Branding</label><br />
      </div>
      <div class="mb-3">
        <h1>Formation Professionnelle qualifiante</h1>
        <p> Formation Professionnelle et Accompagnement Pratique  </p>
        <input type="checkbox" id="payement" name="formation18" value="Assistanat de direction">
        <label for="payement">Assistanat de direction</label><br />
        <input type="checkbox" id="payement" name="formation19" value="Secrétariat générale">
        <label for="payement">Secrétariat générale </label><br />
        <input type="checkbox" id="payement" name="formation20" value="Réceptionniste en hôtellerie">
        <label for="payement">Réceptionniste en hôtellerie</label><br />
        <input type="checkbox" id="payement" name="formation21" value="Bureautique/ agent de Saisie">
        <label for="payement">Bureautique/ agent de Saisie</label><br />
        <input type="checkbox" id="payement" name="formation22" value="Guide Accompagnateur touristique">
        <label for="payement">Guide Accompagnateur touristique</label><br />
        <input type="checkbox" id="payement" name="formation23" value="Agent de billetterie">
        <label for="payement">Agent de billetterie</label><br />
      </div>

      <div class="mb-3">
        <br>
      <h1>Modalités de paiement des formations</h1>
      <input type="radio" name="payement" value="Cache" required="" checked>
        <label for="payement">Cache</label><br />
        <input type="radio" name="payement" value="Chèque" required="">
        <label for="payement">Chèque</label><br />
        <input type="radio" name="payement" value="Par tranches" required="">
        <label for="payement">Par tranches</label><br />
      </div>
          <button type="submit" class="btn btn-primary">Submit</button> 
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          </form>
          <div class="main-w3layouts wrapper">
          <div class="main-agileinfo">
            <div class="agileits-top">
            <div class="container">
          <h1 class="text-center mt-3">Conditions Générale de l’inscription </h1> <br></div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Préambule : 
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>Wonder Works Academy propose aux candidats des formations professionnelles et d’accompagnement diplômantes en un rythme d’études alternés. Le candidat suit son parcours au sein de l’établissement suivant un calendrier de formation selon son choix lors de l’inscription. A la fin de son parcours de formation, le candidat effectue un stage pratique au sein d’une entité professionnelle en accord avec Wonder Works Academy en fonction d’un calendrier défini par l’entité elle-même, soit il travaille sur un projet réel défini par le staff de l’établissement scolaire, sois il présente ou expose son projet ou son travail artistique ou quiconque lors d’un évènement dédié pour ces fins. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 1 : 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
          <p>Wonder Works Academy s’engage à fournir aux candidats régulièrement inscrits et en règle avec l’administration de l’Académie, les prestations telles que définies dans le « règlement intérieur » pour la rentrée scolaire 2022/2023. </p>  
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Art 2 : 
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  Le/ la Candidat(e) reconnait avoir pris connaissance du Règlement intérieur de l’Académie et du règlement des études</p>     
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 3 :  
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Les frais d’études sont composés des frais d’études et des frais pédagogiques dus à l’entité anglaise (LISD, UK).
      Les frais pédagogiques (LISD UK) sont payables par versement direct en dinar : 
      -	Volume horaire de moins de 120 heures : 10 000 da
      -	Volume Horaire de 120 et de 144 heures : 13000 da
      -	Volume Horaire supérieur à 144 heures :  20000 da 
      </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 4 :  
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Les frais d’admission sont payables dès inscription primaire avant le début de la formation choisie. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 5 :  
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p> Le candidat(e) doit s’acquitter des frais d’études normalement au moins un mois avant l’ouverture du parcours choisi : soit en totalité pour paiement comptant, partiellement (versement par tranches)pour le paiement échelonné.. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 6 : 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>  un(e) candidat(e) ne peut accéder aux cours si ses obligations financières ne sont pas respectées, et s’il ou elle n’a pas respecté les échéances prévues ci-dessous. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 7 : 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>   Un candidat ne peut pas être diplômé si son engagement financier ou comportement durant le parcours ne sont pas respectés, sera invalide. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 8 : Remboursement :
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  -	Si la demande d’annulation est reçue avant le début ou durant le parcours de la formation, le candidat aura 85% du remboursement, dans une période de trois mois ferme</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 9 : 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>  en cas de force majeure, les frais d’études sont régularisés au prorata temporis. La force majeure est appréciée par la direction. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Art 10 : 
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>L’académie réserve le droit de partager des photos dans l’ensemble des réseaux sociaux pour des fins de communications. </p><br>
            <p> Tout litige qui pourra survenir dans l’exécution de la présente convention sera soumis aux procédures contentieuses. </p><br>
            </div>
          </div>
        </div>
      </div> 
      <div>



      The International Learning Center Algeria - Wonder Works Academy
      Adresse : Rue Didouche Mourad Batiment 1Ter, 3e étage, Alger Centre
      Tel : +213 554 058 228 +213 558 837 407
      Email : academy.wonderworks@gmail.com web : FB/ IG/ IN (Wonder Works Academy)
      </div>
			
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>