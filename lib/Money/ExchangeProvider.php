<?php

namespace Money;

interface ExchangeProvider {

	function exchange(Money $money, Currency $currency);

}

?>
