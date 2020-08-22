	<div class="l-modal__mask"></div>
	<div class="l-modal l-modal__contact" id="contato">
		<div class="l-modal__close">
			<img src="media/img/icons/icon_x.svg" alt="">
		</div>
		<div class="l-modal__content">
			<h2 class="content__title"><strong>Faça </strong>Contato</h2>
			<p class="content__description">Preencha os campos abaixo para que possamos entender sua necessidade e conduzi-la de forma mais rápida e eficiente</p>
			<div class="content__main">
				<form action="#" class="c-simpleForm" method="post">
					<ul>
						<li class="u-fw100">
							<input id="formContato_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
						</li>
						<li class="u-fw100">
							<input id="formContato_email" type="email" name="email" class="field" placeholder="example@site.com" required>
						</li>
						<li class="u-fw100">
							<input id="formContato_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
						</li>
						<li class="u-fw100">
							<textarea id="formContato_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
						</li>
						<li class="u-fw100">
							<button class="c-btn">Enviar</button>
						</li>
					</ul>
				</form>
				<ul class="c-infosContato">
					<li>
						<a href="#">
							<span class="caption">(48) 999.999.999</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="caption">contato@dominio.com.br</span>
						</a>
					</li>
					<li>
						<a href="#">
							<address class="caption">
								Av. Getúlio Vargas, 153 - Centro, Criciúma - SC, 88801-500
							</address>
						</a>
					</li>
				</ul>
				<div class="c-mapBox u-aspectRatio u-aspectRatio--4-3">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.7120947555334!2d-46.846951070766416!3d-23.50197011918921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf02218824a873%3A0x4167033c76baa2ec!2sAlameda%20Rio%20Negro%2C%20500%20-%20Alphaville%20Industrial%2C%20Barueri%20-%20SP%2C%2006454-000!5e0!3m2!1spt-BR!2sbr!4v1598110687509!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
<!--	<div class="l-modal l-modal__insuranceQuote" id="cotacao">-->
<!--		<div class="l-modal__close">-->
<!--			<img src="media/img/icons/icon_x.svg" alt="">-->
<!--		</div>-->
<!--		<div class="splide__insuranceQuote">-->
<!--			<div class="splide__track">-->
<!--				<ul class="splide__list u-dflex">-->
<!--					<li class="splide__slide">-->
<!--						<div class="l-modal__content">-->
<!--							<h2 class="content__title"><strong>Cotação </strong>Seguro JRF</h2>-->
<!--							<p class="content__description">Preencha os campos abaixo para que possamos oferecer um atendimento e uma proposta diferenciada</p>-->
<!--							<div class="content__main">-->
<!--								<form action="#" class="c-simpleForm" method="post">-->
<!--									<fieldset>-->
<!--										<div class="fieldsetFlex">-->
<!--											<legend>Tipo de veículo</legend>-->
<!--											<ul>-->
<!--												<li class="u-fw100 liCheckbox --giant">-->
<!--													<div>-->
<!--														<label for="option1">-->
<!--															<img src="media/img/icons/icon_attach.svg" alt="Motocicleta">-->
<!--															<span>Automóvel</span>-->
<!--														</label>-->
<!--														<input type="radio" id="option1" name="tipo-de-veiculo">-->
<!--													</div>-->
<!--													<div>-->
<!--														<label for="option2">-->
<!--															<img src="media/img/icons/icon_attach.svg" alt="Motocicleta">-->
<!--															<span>Motocicleta</span>-->
<!--														</label>-->
<!--														<input type="radio" id="option2" name="tipo-de-veiculo">-->
<!--													</div>-->
<!--												</li>-->
<!--											</ul>-->
<!--										</div>-->
<!--									</fieldset>-->
<!--									<fieldset>-->
<!--										<div class="fieldsetFlex">-->
<!--											<legend>Dados pessoais</legend>-->
<!--											<ul>-->
<!--												<li class="u-fw100">-->
<!--													<input id="formId_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>-->
<!--												</li>-->
<!--												<li class="u-fw100">-->
<!--													<input id="formId_email" type="email" name="email" class="field" placeholder="example@site.com" required>-->
<!--												</li>-->
<!--												<li class="u-fw100">-->
<!--													<input id="formId_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>-->
<!--												</li>-->
<!--											</ul>-->
<!--										</div>-->
<!--									</fieldset>-->
<!--									<fieldset>-->
<!--										<div class="fieldsetFlex">-->
<!--											<legend>Dados do veículo</legend>-->
<!--											<ul>-->
<!--												<li class="u-fw100 liSelect">-->
<!--													<div>-->
<!--														<select name="marcaVeiculo" id="formId_marcaVeiculo" class="field" required>-->
<!--															<option value="">Marca do Veículo</option>-->
<!--															<option value="opt1">Lorem Ipsum</option>-->
<!--															<option value="opt2">Lorem Ipsum</option>-->
<!--															<option value="opt3">Lorem Ipsum</option>-->
<!--														</select>-->
<!--													</div>-->
<!--												</li>-->
<!--												<li class="u-fw100 liSelect">-->
<!--													<div>-->
<!--														<select name="modeloVeiculo" id="formId_modeloVeiculo" class="field" required>-->
<!--															<option value="">Modelo do Veículo</option>-->
<!--															<option value="opt1">Lorem Ipsum</option>-->
<!--															<option value="opt2">Lorem Ipsum</option>-->
<!--															<option value="opt3">Lorem Ipsum</option>-->
<!--														</select>-->
<!--													</div>-->
<!--												</li>-->
<!--												<li class="u-fw33 liSelect">-->
<!--													<div>-->
<!--														<select name="ano" id="formId_ano" class="field" required>-->
<!--															<option value="">Ano</option>-->
<!--															<option value="opt1">Lorem Ipsum</option>-->
<!--															<option value="opt2">Lorem Ipsum</option>-->
<!--															<option value="opt3">Lorem Ipsum</option>-->
<!--														</select>-->
<!--													</div>-->
<!--												</li>-->
<!--												<li class="u-fw33 liSelect">-->
<!--													<div>-->
<!--														<select name="ano" id="formId_ano" class="field" required>-->
<!--															<option value="">Ano</option>-->
<!--															<option value="opt1">Lorem Ipsum</option>-->
<!--															<option value="opt2">Lorem Ipsum</option>-->
<!--															<option value="opt3">Lorem Ipsum</option>-->
<!--														</select>-->
<!--													</div>-->
<!--												</li>-->
<!--												<li class="u-fw33 liCheckbox --only1Option">-->
<!--													<div>-->
<!--														<label for="zeroKm">Zero km</label>-->
<!--														<input type="checkbox" id="zeroKm">-->
<!--													</div>-->
<!--												</li>-->
<!--											</ul>-->
<!--										</div>-->
<!--									</fieldset>-->
<!--									<fieldset>-->
<!--										<h3>Responda um pouco mais sobre seu veículo</h3>-->
<!--									</fieldset>-->
<!--								</form>-->
<!--							</div>-->
<!--						</div>-->
<!--					</li>-->
<!--					<li class="splide__slide">-->
<!--						<div class="l-modal__content">-->
<!--							<h2 class="content__title"><strong>Faça </strong>Contato</h2>-->
<!--							<p class="content__description">Preencha os campos abaixo para que possamos entender sua necessidade e conduzi-la de forma mais rápida e eficiente</p>-->
<!--							<div class="content__main">-->
<!--								form cotacao 2-->
<!--							</div>-->
<!--						</div>-->
<!--					</li>-->
<!--					<li class="splide__slide">-->
<!--						<div class="l-modal__content">-->
<!--							<h2 class="content__title"><strong>Faça </strong>Contato</h2>-->
<!--							<p class="content__description">Preencha os campos abaixo para que possamos entender sua necessidade e conduzi-la de forma mais rápida e eficiente</p>-->
<!--							<div class="content__main">-->
<!--								form feedback 1-->
<!--							</div>-->
<!--						</div>-->
<!--					</li>-->
<!--					<li class="splide__slide">-->
<!--						<div class="l-modal__content">-->
<!--							<h2 class="content__title"><strong>Faça </strong>Contato</h2>-->
<!--							<p class="content__description">Preencha os campos abaixo para que possamos entender sua necessidade e conduzi-la de forma mais rápida e eficiente</p>-->
<!--							<div class="content__main">-->
<!--								form cotacao feedback 2-->
<!--							</div>-->
<!--						</div>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

	<!-- carregamento dos scripts css da página -->
	<?php echoJssFiles($load_this_js); ?>
	<!-- Fecha div.maxRow -->
	</div>


</body>
</html>