<!-- popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">

					<div class="small-dialog-headline">
						<h4>Solicitar Servicio</h4>
					</div>

					<div class="small-dialog-content">
						<div id="contact-message"></div>

						<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on" />

							<div>
								<input name="name" type="text" id="name" placeholder="Su Nombre" required="required" />
							</div>
							<div>
								<input name="email" type="email" id="email" placeholder="Correo Electrónico" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>

							<div>
								<input name="phone" type="tel" id="phone" size="30" placeholder="Teléfono (opcional)" />
							</div>

							<div>
								<select name="subject" id="subject" required="required">
									<option value="" />Seleccione el Asunto
									<option value="Painting" />Painting
									<option value="Repair" />Repair
									<option value="Carpentry" />Carpentry
									<option value="Plumbing" />Plumbing
									<option value="Remodeling" />Remodeling
									<option value="Electrical" />Electrical
									<option value="Other" />Otros
								</select>
							</div>

							<div>
								<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Mensaje" spellcheck="true" required="required"></textarea>
							</div>

							<div class="divider"></div>

							<input type="submit" class="submit" id="submit" value="Enviar" />

						</form>
					</div>
				</div>