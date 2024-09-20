<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/dist/style.css">
        <title>Connexion</title>
    </head>

    <body>
        <div>
            <!-- Session Status -->
            <div class="mb-4" :status="session('status')"><div>
            <!-- login content -->
            <div id="app" class="app-shell">
                <div >
                    <div class="shell-view">
                        <div class="main">
                            <div class="body-container">
                                <div class="body">
                                    <div data-testid="SignInSignUpWidget" class="ius-hosted-ui theme-intuit-ecosystem ius-reset" >
                                        <div class="styledComponents__HostedSisuHeightDiv-sc-1n0nm38-0 ixZFAx">
                                            <div>
                                                <div class="Bookends__FlexCenteredColumn-sc-163uul4-0 ebWyYe">
                                                    
                                                    <div class="Bookends__NonStyledDiv-sc-163uul4-7 iuspCN">
                                                        <div class="styledComponents__StyledWidgetContainer-kizisb-14 csXYaH ius mt-4">
                                                            <div class="IdentifierFirstUnknown__StyledContainer-sc-1pqtykm-0 fOdUvC">
                                                                <section
                                                                    class="IuxH2AndDescription__StyledSection-j40avf-0 hVIzWf">
                                                                    <header>
                                                                        <h2 class="IuxH2AndDescription__StyledH2-j40avf-1 fvsQoV Typography-quickbooks-9b5972e Typography-light-242afbc Typography-headline-2-0a55c12">
                                                                            Connectez-vous
                                                                        </h2>
                                                                        <div class="IuxH2AndDescription__StyledDescription-j40avf-3 dEzMwH">
                                                                            Utilisez votre  CompteIntuit pour vous connecter 
                                                                        </div>
                                                                    </header>
                                                                </section>
                                                                <form method="POST" action="{{ route('login') }}" autocomplete="on"  class="IdentifierFirstUnknown__StyledForm-sc-1pqtykm-1 khNNhu">
                                                                    @csrf
                                                                    <div class="IdentifierFirstInternationalModeInput__StyledContainer-sc-1ldtryr-0 fudALe">
                                                                        <div class="Tabs-quickbooks-5442e88 Tabs-light-168754c idsTSTabs">
                                                                            
                                                                            <div role="tabpanel" id="idsTab-EMAIL_USER_ID-tabPanel" tabindex="0" aria-labelledby="idsTab-EMAIL_USER_ID" class="Tabs-tabPanel-b94d42b">
                                                                                <div class="IuxFormInput__StyledFieldWrapper-sc-1nlfpoi-0 hiOEEg">
                                                                                    {{-- User --}}
                                                                                    <div class="TextField-quickbooks-6a1ccc9 TextField-light-8d9994d idsTSTextField TextField-TextFieldWrapper-ac3dd51" style="width: 100%;">
                                                                                        <label for="iux-identifier-first-international-email-user-id-input" class="TextField-TFLabelWrapper-5565c4c TextField-TFHasLabel-cdab9c1">
                                                                                            <span class="TextField-TFLabelOverride-1f9d70f TextField-size-medium-253d5f0 Typography-quickbooks-9b5972e Typography-light-242afbc Typography-body-3-3b2236f">
                                                                                                Utilisateur
                                                                                            </span>
                                                                                            <div class="TextField-TFInputWrapper-5ea0f14 TextField-size-medium-253d5f0">
                                                                                                <input  width="100%" class="idsF TextField-TFInput-5b74f65 TextField-quickbooks-6a1ccc9 TextField-light-8d9994d TextField-TFNoErrorText-8d9994d TextField-TFNotDisabled-7206466 TextField-TFErrorText-d7c117f TextField-TFAddonAfter-bb29c89 TextField-size-medium-253d5f0" type="text"  name="email" :value="old('email')"  autocapitalize="none"  inputmode="text" maxlength="256" placeholder="Adresse e-mail" >
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                    {{-- Password --}}
                                                                                    <div class="TextField-quickbooks-6a1ccc9 TextField-light-8d9994d idsTSTextField TextField-TextFieldWrapper-ac3dd51" style="width: 100%;">
                                                                                        <label for="iux-identifier-first-international-email-user-id-input" class="TextField-TFLabelWrapper-5565c4c TextField-TFHasLabel-cdab9c1">
                                                                                            <span class="TextField-TFLabelOverride-1f9d70f TextField-size-medium-253d5f0 Typography-quickbooks-9b5972e Typography-light-242afbc Typography-body-3-3b2236f">
                                                                                                Mot de passe
                                                                                            </span>
                                                                                            <div class="TextField-TFInputWrapper-5ea0f14 TextField-size-medium-253d5f0">
                                                                                                <input width="100%" class="idsF TextField-TFInput-5b74f65 TextField-quickbooks-6a1ccc9 TextField-light-8d9994d TextField-TFNoErrorText-8d9994d TextField-TFNotDisabled-7206466 TextField-TFErrorText-d7c117f TextField-TFAddonAfter-bb29c89 TextField-size-medium-253d5f0" type="password" name="password"  autocapitalize="none"  inputmode="text" maxlength="256" placeholder="Adresse e-mail ou nom d'utilisateur" >
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    {{-- Ckeck --}}
                                                                    <div class="SignInRememberMe__StyledSignInRememberMeContainer-sc-1gzglnq-0 gHtwMC">
                                                                        <label class="Checkbox-labelWrapper-bf89850 Checkbox-size-medium-3b52810 Checkbox-quickbooks-b4847af Checkbox-light-cf6ff77 IuxCheckbox__StyledCheckbox-sc-1anm974-2 cBJOrU">
                                                                            <span class="idsTSCheckbox RcCheckbox-container-f8facb1 RcCheckbox-containerChecked-453bbc1">
                                                                                <input  class="idsF RcCheckbox-inputCheckboxWrapper-aed7c8e RcCheckbox-inputCheckboxChecked-da196e4" name="remember" type="checkbox" checked="">
                                                                                <span class="RcCheckbox-innerCheckboxWrapper-84395f1 RcCheckbox-quickbooks-52adf20 RcCheckbox-light-8efcac5 RcCheckbox-innerCheckboxChecked-1777f3c"></span>
                                                                            </span>
                                                                            <span class="Checkbox-spanWrapper-62722d0 Checkbox-size-medium-3b52810 Checkbox-quickbooks-b4847af Checkbox-light-cf6ff77 Typography-quickbooks-9b5972e Typography-light-242afbc Typography-body-2-0972c4f">
                                                                                <div data-testid="IdentifierFirstRememberMeLabel" class="IuxCheckbox__StyledCheckboxLabel-sc-1anm974-1 kNMZax">
                                                                                    {{ __('Conserver mes infos') }}
                                                                                </div>
                                                                            </span>
                                                                        </label>
                                                                    </div>

                                                                    <button type="submit" class="idsTSButton idsF Button-button-5eed597 Button-quickbooks-f686cfa Button-light-0596377 Button-size-medium-71460f4 Button-purpose-standard-c59fdb5 Button-priority-primary-7bd5bc4 IuxButton__StyledButton-ktqsri-0 ijWFLg Button-full-af87840">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="#ffffff" viewBox="0 0 24 24"
                                                                            color="currentColor" width="24px" height="24px"
                                                                            focusable="false" aria-hidden="true">
                                                                            <path fill="currentColor"
                                                                                d="M17 10V7a5 5 0 0 0-5-5 5.006 5.006 0 0 0-5 5v3a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3M9 7a3 3 0 0 1 3-3 3 3 0 0 1 3 3v3H9zm9 12a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1z">
                                                                            </path>
                                                                            <path fill="currentColor"
                                                                                d="M12 13a1.994 1.994 0 0 0-1 3.722V18a1 1 0 1 0 2 0v-1.282A1.994 1.994 0 0 0 12 13">
                                                                            </path>
                                                                        </svg>
                                                                        <span class="Button-label-e0ecc32"> {{ __('Se connecter') }}</span>
                                                                    </button>
                                                                    {{-- condition --}}
                                                                    <div
                                                                        class="IdentifierFirstUnknownSubmitButton__StyledTermsOfServiceContainer-sc-1ec9o89-0 gczWKa">
                                                                        <div class="TermsOfService__TermsOfServiceWrapper-sc-1h018p6-0 ftvUub">
                                                                            <span>
                                                                                <span class="TermsOfService__StyledText-sc-1h018p6-2 gsUCyD">
                                                                                    En sélectionnant Se connecter, vous acceptez nos 
                                                                                    @if (Route::has('password.request'))
                                                                                    <a href="{{ route('password.request') }}" rel="noopener noreferrer" target="_blank" class="idsTSLink Link-link-11f6543 Link-inline-7c35f5b Link-light-8c95283 IuxDynamicLink__StyledLink-sc-1e70qj9-0 scdBb">
                                                                                        <span class="Typography-quickbooks-9b5972e Typography-light-242afbc Typography-body-4-397be1b">{{ __('Forgot your password?') }}</span>
                                                                                    </a>
                                                                                    @endif
                                                                                <span>
                                                                                </span>et reconnaissez avoir.</span>
                                                                            </span>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                
                                                                </form>
                                                            
                                                            
                                                                <div class="RecaptchaTOS__StyledContainer-sc-241bcf-1 huGizb">
                                                                    ReCAPTCHA invisible par Google&nbsp;:

                                                                    <a href="#"  target="_blank" class="idsTSLink Link-link-11f6543 Link-inline-7c35f5b Link-light-8c95283 IuxDynamicLink__StyledLink-sc-1e70qj9-0 scdBb">
                                                                        <span class="Typography-quickbooks-9b5972e Typography-light-242afbc Typography-body-3-3b2236f">
                                                                            Conditions d'utilisation
                                                                        </span>
                                                                    </a>.

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="BookendsFooterContainer__FooterOutsideWrapper-sc-3y9p8r-0 hJwMrp mt-3">
                                                            <footer class="BookendsFooter__StyledFooter-m32qkh-0 FMeFn">
                                                                <div class="BookendsFooter__StyledDiv-m32qkh-1 dseHq">
                                                                    <div class="BookendsCopyright__FooterText-sc-14acr3j-0 kLZOSk">
                                                                        ©&nbsp;2024&nbsp;Intuit,&nbsp;Inc. Tous droits
                                                                        réservés. Intuit, QuickBooks, QB, TurboTax,
                                                                        ProConnect, Credit&nbsp;Karma et Mailchimp sont des
                                                                        marques déposées de Intuit&nbsp;Inc.
                                                                    </div>
                                                                </div>
                                                            </footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="secondary-widget-renderer" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="trowser-view"></div>
                    <div class="portal-view" id="portal-root"></div>
                </div>
            </div>
        </div>
    </body>

</html>