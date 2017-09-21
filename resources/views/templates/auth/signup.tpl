{{header? &title=`Sign up`}}
    
<div class="columns">
    <div class="column is-4 is-offset-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                  Sign up
                </p>
                <a class="card-header-icon">
                    <span class="icon">
                        <i class="fa fa-user-circle"></i>
                    </span>
                </a>
            </header>

            [- <div class="card-image">
                <figure class="image is-4by3">
                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                </figure>
            </div> -]

            <div class="card-content">
                <div class="card-text">

                    <form class="form-signin" action="[[path_for? &route=`signup.post`]]" method="post">
                        <div class="field">
                            <label class="label">Your name*</label>
                            <div class="control has-icons-left has-icons-right">
                                <input type="text" name="name" class="input[+errors.name:ifnotempty=` is-danger`+]" placeholder="Your name" value="[+old.name:e+]">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user-o"></i>
                                </span>

                                {% if [+errors.name+] %}
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                {% endif %}
                            </div>

                            {% if [+errors.name+] %}
                                <p class="help is-danger">[+errors.name:first+]</p>
                            {% endif %}
                        </div>
                        
                        <div class="field">
                            <label class="label">Email address*</label>
                            <div class="control has-icons-left has-icons-right">
                                <input type="email" name="email" class="input[+errors.email:ifnotempty=` is-danger`+]"  placeholder="you@domain.com" value="[+old.email:e+]" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>

                                {% if [+errors.email+] %}
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                {% endif %}
                            </div>

                            {% if [+errors.email+] %}
                                <p class="help is-danger">[+errors.email:first+]</p>
                            {% endif %}
                        </div>
                        
                        <div class="field">
                            <label class="label">Password*</label>
                            <div class="control has-icons-left has-icons-right">
                                <input type="password" name="password" class="input[+errors.password:ifnotempty=` is-danger`+]" value="" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user-secret"></i>
                                </span>

                                {% if [+errors.password+] %}
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                {% endif %}
                            </div>

                            {% if [+errors.password+] %}
                                <p class="help is-danger">[+errors.password:first+]</p>
                            {% endif %}
                        </div>
                        
                        [- <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                <input type="checkbox">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>
                        </div> -]
                        
                        [- <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> -]

                        <button type="submit" class="button is-primary" style="width: 100%;">Submit</button>
                    </form>
                </div>
            
            </div>

            <footer class="card-footer">
                <a class="card-footer-item">Already has account</a>
                <a class="card-footer-item">Remind me my pass</a>
            </footer>

        </div>
    </div>
</div>

{{footer}}
