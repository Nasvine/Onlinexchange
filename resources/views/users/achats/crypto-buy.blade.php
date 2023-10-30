@extends('users.layouts.master')

@section('title') @lang('translation.Buy_Sell') @endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')

    @component('users.components.breadcrumb')
        @slot('li_1') Crypto @endslot
        @slot('title') Achat @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span
                                    class="d-none d-sm-inline-block">Wallet Balance <i
                                        class="mdi mdi-chevron-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                <div class="dropdown-item-text">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5 class="mb-0">$ 9148.23</h5>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    BTC : <span class="float-end">1.02356</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    ETH : <span class="float-end">0.04121</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    LTC : <span class="float-end">0.00356</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item text-primary text-center" href="#">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Acheter vos cryptos ici</h4>
                    <div class="crypto-buy-sell-nav">
                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#buy" role="tab">
                                    Achats
                                </a>
                            </li>
                        </ul>

                        
                        <div class="tab-content crypto-buy-sell-nav-content p-4">
                            <div class="tab-pane active" id="buy" role="tabpanel">
                                <form>
                                    
                                    <div class="mb-2">

                                        <div class="row">
                                            <div class="col-xl-12 col-sm-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-body" style="background-color: rgb(175, 175, 245);">
                                                        <p>
                                                            Pour effectuer l'achat d'un crypto, vous devez renseignez le formulaire ci-dessous afin d'anclancher le processus d'Achat.
                                                            C'est très simple et rapide.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                        
                                        

                                    </div>
                                    <div class="w-100">
                                        <p id="prix_unitaire"></p>
                                        <p id="prix_total"></p>
                                    </div>
                                    
                                       
                                    <form action="https://account.masterbuysell.com/account/crypto-buy.php" method="POST">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="templating-select">
                                                    <label class="form-label">Monnaires Disponibles</label>
                                                    <select class="form-control select2-templating" id="monnaie" name="monnaie">
                                                        <optgroup label="Selctionner la monnaire">
                                                            <option value="Perfect Money">Perfect Money</option>
                                                            <option value="AdvCash">AdvCash</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                            <option value="Altcoin">Altcoin</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-labe" for="autoSizingInput">Montant à acheter</label>
                                                <input type="number" class="form-control" id="montant" name="montant" min="0" step="0.01" placeholder="10 à 100000 USD">
                                            </div>
                                        </div>

                                        <label class="main-content-label mt-4">Méthode de paiement : </label>
                                        <div class="form-group">
                                            <div class="p-1 d-flex">
                                                <div class="payment-form form w-100">
                                                <div style="margin: 2px 0 5px 0">Veuillez choisir un moyen de paiement.</div>
                                                <select class="form-control border-left-0 icons_select2 br-0 cryto_options" name="payement_method" id="payement_method" data-placeholder="Choose one">
                                                    <optgroup label="Coins">	
                                                                                                                            
                                                            <option value="MTN BJ" id="MTN BJ"  style="background : url(../assets/img/mtnlogo.png) center center / cover " ><img src="../assets/img/mtnlogo.png" style="width : 60px; height : 40px;" alt="MTN BJ">MTN BJ</option>
                                                                                                                                
                                                            <option value="MTN CI" id="MTN CI"  style="background : url(../assets/img/mtnlogo.png) center center / cover " ><img src="../assets/img/mtnlogo.png" style="width : 60px; height : 40px;" alt="MTN CI">MTN CI</option>
                                                                                                                                
                                                            <option value="Moov" id="Moov"  style="background : url(../assets/img/moovlogo.png) center center / cover " ><img src="../assets/img/moovlogo.png" style="width : 60px; height : 40px;" alt="Moov">Moov</option>
                                                                                                                                
                                                            <option value="Western-Union" id="Western-Union"  style="background : url(../assets/img/payments/westernunion.svg) center center / cover " ><img src="../assets/img/payments/westernunion.svg" style="width : 60px; height : 40px;" alt="Western-Union">Western-Union</option>
                                                                                                                                
                                                            <option value="MoneyGram" id="MoneyGram"  style="background : url(../assets/img/moneygram.png) center center / cover " ><img src="../assets/img/moneygram.png" style="width : 60px; height : 40px;" alt="MoneyGram">MoneyGram</option>
                                                                                                                                
                                                            <option value="Virement-Bancaire" id="Virement-Bancaire"  style="background : url(../assets/img/virementbancaire.png) center center / cover " ><img src="../assets/img/virementbancaire.png" style="width : 60px; height : 40px;" alt="Virement-Bancaire">Virement-Bancaire</option>
                                                                                                                                                                                                                                                                                
                                                            <option value="Orange" id="Orange"  style="background : url(https://account.masterbuysell.com/assets/img/orange-money.jpg) center center / cover " ><img src="https://account.masterbuysell.com/assets/img/orange-money.jpg" style="width : 60px; height : 40px;" alt="Orange">Orange</option>
                                                                                                                        </div>
                                                    <div class="invalid-feedback"></div>
                                                    </optgroup>
                                                </select>		
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn btn-block mt-4 w-50 mx-auto">Acheter</button>
                                    </form>
                                    <div class="text-center mt-4">
                                        <button type="button" class="btn btn-success">Buy Crypto currency</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

    @section('js')
         
    <script>
		var prix_unitaire = 0;

		document.getElementById('monnaie').addEventListener('change', function() {
			var monnaie = document.getElementById('monnaie').value;
			switch(monnaie) {
				case "Perfect Money":
					prix_unitaire = 500;
					break;
				case "AdvCash":
					prix_unitaire = 510;
					break;
				case "BTC":
					prix_unitaire = 5800000;
					break;
				case "ETH":
					prix_unitaire = 180000;
					break;
				case "Altcoin":
					prix_unitaire = 200;
					break;
				default:
					prix_unitaire = 0;
			}
			if(prix_unitaire > 0) {
				document.getElementById('prix_unitaire').innerHTML = `<p style= "font-size:20px;">1$ USD de ${monnaie} est actuellement à : <b style= "font-size:20px; color:blue;">${prix_unitaire}</b> FCFA </p>`;
			}
			else {
				document.getElementById('prix_unitaire').innerHTML = "";
			}
			updatePrixTotal();
		});

		document.getElementById('montant').addEventListener('input', function() {
			updatePrixTotal();
		});

		function updatePrixTotal() {
			var montant = document.getElementById('montant').value;
			var prix_total = prix_unitaire * montant;
			if(prix_total > 0) {
				document.getElementById('prix_total').innerHTML = `<p style= "font-size:15px;"> Valeur de votre achat : <b style= "font-size:15px; color:blue;">${prix_total}</b> FCFA</p>`;
			}
			else {
				document.getElementById('prix_total').innerHTML = "";
			}
		}
	</script>
    @endsection

@endsection
