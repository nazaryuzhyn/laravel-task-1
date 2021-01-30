@section('footer')
<footer class="footer">
	<div class="footer__wrapper container">
        <div class="footer__login-wap footer__wrap">
            <a href="{{ route('home') }}">
                <img src="{{ asset('/img/png/logo-footer.png') }}" class="footer__logo" alt="PobytOK">
            </a>
            @guest
            <div class="footer__enter-in footer__enter-in-btn">
                <svg class="login-btn--icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M3.75 0V3.75001H6.24998V2.49998H16.25V17.5H6.24998V16.25H3.75V20H18.75V0H3.75Z" fill="#77CCF9"></path>
                        <path d="M6.09863 12.8662L7.8662 14.6338L12.5 10L7.86624 5.36621L6.09867 7.13378L7.71487 8.74997H1.25V11.25H7.71487L6.09863 12.8662Z" fill="#77CCF9"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="20" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <span>Вход</span>
            </div>
            <div class="footer__enter-in footer__reg-in-btn">
                <svg class="registration-btn--icon" width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.8338 4.58339C12.8338 7.11469 10.7817 9.16661 8.25038 9.16661C5.71909 9.16661 3.66699 7.11469 3.66699 4.58339C3.66699 2.05209 5.71909 0 8.25038 0C10.7817 0 12.8338 2.05209 12.8338 4.58339Z" fill="#77CCF9"></path>
                    <path d="M12.1459 11H4.35411C1.9534 11 0 12.9534 0 15.3541V18.5625C0 18.942 0.307999 19.25 0.6875 19.25H15.8125C16.192 19.25 16.5 18.942 16.5 18.5625V15.3541C16.5 12.9534 14.5466 11 12.1459 11Z" fill="#77CCF9"></path>
                </svg>
                <svg class="registration-btn--icon-mobile" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.66688 3.80957C9.66688 5.36117 8.40901 6.619 6.85731 6.619C5.30562 6.619 4.04774 5.36117 4.04774 3.80957C4.04774 2.25792 5.30566 1 6.85731 1C8.40896 1 9.66688 2.25792 9.66688 3.80957ZM3.619 10.1428H10.0953C11.5384 10.1428 12.7143 11.3187 12.7143 12.7618V14.9999H1V12.7618C1 11.3187 2.17589 10.1428 3.619 10.1428Z" stroke="#77CCF9" stroke-width="2"></path>
                </svg>
                <span>Регистрация</span>
            </div>
            @endguest
        </div>
		<div class="footer__address-wrap footer__wrap">
			<h4 class="footer__address-title">Адрес</h4>
			<address class="footer__address">
				WBM GROUP SP. Z O.O. SP.K.<br>
				NIP: 6751623940<br>
				ul. Rondo Mogilskie 1/522<br>
				31-516, Kraków
			</address>
		</div>
		<div class="footer__mail-wrap footer__wrap">
			<h4 class="footer__mail-title">EMAIL</h4>
			<a class="footer__mail-link" href="mailto:office@pobytok.pl">office@pobytok.pl</a>
			<a class="footer__mail-link" href="mailto:marketing@pobytok.pl">marketing@pobytok.pl</a>
			<a class="footer__mail-link" href="mailto:support@pobytok.pl">support@pobytok.pl</a>
		</div>
		<div class="footer__social-wrap footer__wrap">
			<h4 class="footer__social-title">Мы в соцсетях</h4>
			<ul class="footer__social-list">
				<li class="footer__social-item">
					<a href="https://twitter.com/OkPobyt" target="_blank" class="footer__social-link footer__social-link--twitter">
						<svg width="21" height="18" viewBox="0 0 21 18" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.8262 4.85938C19.6465 4.24414 20.3848 3.50586 20.959 2.64453C20.2207 2.97266 19.3594 3.21875 18.498 3.30078C19.4004 2.76758 20.0566 1.94727 20.3848 0.921875C19.5645 1.41406 18.6211 1.7832 17.6777 1.98828C16.8574 1.12695 15.75 0.634766 14.5195 0.634766C12.1406 0.634766 10.2129 2.5625 10.2129 4.94141C10.2129 5.26953 10.2539 5.59766 10.3359 5.92578C6.76758 5.7207 3.56836 3.99805 1.43555 1.41406C1.06641 2.0293 0.861328 2.76758 0.861328 3.58789C0.861328 5.06445 1.59961 6.37695 2.78906 7.15625C2.0918 7.11523 1.39453 6.95117 0.820312 6.62305V6.66406C0.820312 8.75586 2.29688 10.4785 4.26562 10.8887C3.9375 10.9707 3.52734 11.0527 3.1582 11.0527C2.87109 11.0527 2.625 11.0117 2.33789 10.9707C2.87109 12.6934 4.4707 13.9238 6.35742 13.9648C4.88086 15.1133 3.03516 15.8105 1.02539 15.8105C0.65625 15.8105 0.328125 15.7695 0 15.7285C1.88672 16.959 4.14258 17.6562 6.60352 17.6562C14.5195 17.6562 18.8262 11.1348 18.8262 5.43359C18.8262 5.22852 18.8262 5.06445 18.8262 4.85938Z"></path>
						</svg>
						Мы в Twitter
					</a>
				</li>
				<li class="footer__social-item">
					<a href="https://www.facebook.com/service.foreigner" target="_blank" class="footer__social-link footer__social-link--facebook">
						<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.375 7.5625V4.8125C12.375 4.0535 12.991 3.4375 13.75 3.4375H15.125V0H12.375C10.0966 0 8.25 1.84663 8.25 4.125V7.5625H5.5V11H8.25V22H12.375V11H15.125L16.5 7.5625H12.375Z"></path>
						</svg>
						Мы в Facebook
					</a>
				</li>
				<li class="footer__social-item">
					<a href="https://www.linkedin.com/company/pobytok" target="_blank" class="footer__social-link footer__social-link--linkedin">
						<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.278809 7.35559H4.9948V21.5442H0.278809V7.35559Z"></path>
							<path d="M2.66792 0.515625C1.05475 0.515625 0 1.57491 0 2.96719C0 4.32877 1.02336 5.41826 2.60599 5.41826H2.6367C4.28143 5.41826 5.30496 4.32877 5.30496 2.96719C5.27425 1.57491 4.28143 0.515625 2.66792 0.515625Z"></path>
							<path d="M16.5709 7.02258C14.0686 7.02258 12.9474 8.39775 12.3206 9.36472V7.35559H7.60449V21.5442H12.3205V13.6206C12.3205 13.1965 12.3512 12.773 12.4757 12.4697C12.8166 11.6226 13.5926 10.7451 14.8954 10.7451C16.6019 10.7451 17.2845 12.0462 17.2845 13.9536V21.5442H22.0002V13.4086C22.0002 9.05051 19.6735 7.02258 16.5709 7.02258Z"></path>
						</svg>
						Мы в Linkedin
					</a>
				</li>
				<li class="footer__social-item">
					<a href="https://t.me/PobytOK" target="_blank" class="footer__social-link footer__social-link--telegram">
						<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.29355 12.5356L8.02979 19.3757L11.592 15.8135L17.6996 20.668L22 1.33203L0 10.4958L5.29355 12.5356ZM15.7135 6.8797L8.97963 13.0217L8.1409 16.1828L6.59151 12.3085L15.7135 6.8797Z"></path>
						</svg>
						Мы в Telegram
					</a>
				</li>
				<li class="footer__social-item">
					<a href="#" target="_blank" class="footer__social-link footer__social-link--instagram">
						<svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.7773 0H3.22266C1.44583 0 0 1.44583 0 3.22266V18.7773C0 20.5542 1.44583 22 3.22266 22H18.7773C20.5542 22 22 20.5542 22 18.7773V3.22266C22 1.44583 20.5542 0 18.7773 0ZM11.043 16.7578C7.84431 16.7578 5.24219 14.1557 5.24219 10.957C5.24219 7.75838 7.84431 5.15625 11.043 5.15625C14.2416 5.15625 16.8438 7.75838 16.8438 10.957C16.8438 14.1557 14.2416 16.7578 11.043 16.7578ZM17.4883 6.44531C16.4221 6.44531 15.5547 5.57788 15.5547 4.51172C15.5547 3.44556 16.4221 2.57812 17.4883 2.57812C18.5544 2.57812 19.4219 3.44556 19.4219 4.51172C19.4219 5.57788 18.5544 6.44531 17.4883 6.44531Z"></path>
							<path d="M17.4883 3.86719C17.1326 3.86719 16.8438 4.15605 16.8438 4.51172C16.8438 4.86739 17.1326 5.15625 17.4883 5.15625C17.8439 5.15625 18.1328 4.86739 18.1328 4.51172C18.1328 4.15605 17.8439 3.86719 17.4883 3.86719Z"></path>
							<path d="M11.043 6.44531C8.55548 6.44531 6.53125 8.46954 6.53125 10.957C6.53125 13.4445 8.55548 15.4688 11.043 15.4688C13.5305 15.4688 15.5547 13.4445 15.5547 10.957C15.5547 8.46954 13.5305 6.44531 11.043 6.44531Z"></path>
						</svg>
						Мы в Instagram
					</a>
				</li>
				<li class="footer__social-item">
					<a href="#" target="_blank" class="footer__social-link footer__social-link--vk">
						<svg id="Bold" enable-background="new 0 0 24 24" height="22" viewBox="0 0 24 24" width="22" xmlns="http://www.w3.org/2000/svg">
							<path d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"></path>
						</svg>
						Мы в Instagram
					</a>
				</li>
			</ul>
			<ul class="page-header__language-list">
				<li class="page-header__language-item">
					<a href="#" class="page-header__language-link active-language">Ru</a>
				</li>
				<li class="page-header__language-item">
					<a href="#" class="page-header__language-link">Pl</a>
				</li>
				<li class="page-header__language-item">
					<a href="#" class="page-header__language-link">En</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="footer__copyright container">© {{ date("Y") }} PobytOK. Все права защищены.</div>
</footer>
