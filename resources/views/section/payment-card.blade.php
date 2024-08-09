<!-- ***************** payment card popup ***************** -->

<div class="payment-area" id="payment-area">
    <div class="payment-container" id="payment-container">
        <span class="icon-close" id="payment-close-btn">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="product-info">
            <ion-icon name="bag-outline" class="bag-icon"></ion-icon>
            <div class="product">
                <div class="">
                    <h2 class="payment-card-title">Native Youth Jacket</h2>
                    <p>by Michael Hanson</p>
                </div>
                <span class="price payment-card-price">$35</span>
            </div>
            <div class="product">
                <div class="">
                    <h2>Symmetry T-Shirt</h2>
                    <p>by Joshua Coleman</p>
                </div>
                <span class="price">$27</span>
            </div>
            <div class="summary">
                <p>Available <span>$0.00</span></p>
                <p>Fee <span>$0.34</span></p>
            </div>
            <div class="powered-by">
                <p>Powered by <strong>stripe</strong></p>
            </div>
        </div>


        <div class="payment-form">
            <form>

                <div class="payment-method">
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio1" name="radio-group">
                        <label class="radio-button__label" for="radio1">
                            <span class="radio-button__custom"></span>
                            Balance
                        </label>
                    </div>
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio2" name="radio-group">
                        <label class="radio-button__label" for="radio2">
                            <span class="radio-button__custom"></span>
                            Credit Card
                        </label>
                    </div>

                </div>


                <div class="form-group">
                    <input type="email" placeholder="Email Address" required>
                </div>

                <div class="credit-info">
                    <div class=" card-number">
                        <input type="text" placeholder="Card Number" required>
                    </div>
                    <div class=" inline">
                        <input type="text" placeholder="MM/YYYY" required>
                        <input type="text" placeholder="CVC" required>
                    </div>
                </div>


                <!-- checkbox Remember me from payment -->

                <div class="checkbox-wrapper-46">
                    <input type="checkbox" id="cbx-46" class="inp-cbx" />
                    <label for="cbx-46" class="cbx"><span>
                            <svg viewBox="0 0 12 10" height="10px" width="12px">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg></span><span>Remember Me</span>
                    </label>
                </div>

                <!-- ****** end checkbox Remember me from payment -->

                <button type="submit">Pay $62.34</button>
            </form>
        </div>
    </div>
</div>

<!-- ***************** end payment card popup ***************** -->
