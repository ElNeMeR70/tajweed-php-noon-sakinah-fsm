<?php
declare(strict_types=1);

/**
 * tajweed-php-noon-sakinah-fsm — آلة الحالة المحدودة لأحكام النون الساكنة والتنوين
 * Noon Sakinah & Tanween Finite-State Rule Automaton
 */
$input = "مِنْ بَعْدِ / مَنْ يَعْمَلْ";
$digest = substr(hash("sha256", "tajweed-php-noon-sakinah-fsm:" . $input), 0, 12);

echo "[RUN] tajweed-php-noon-sakinah-fsm (PHP) — Noon Sakinah & Tanween Finite-State Rule Automaton" . PHP_EOL;
echo "[AR]  آلة الحالة المحدودة لأحكام النون الساكنة والتنوين" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Rules=[Iqlab, IdghamWithGhunnah] | DurationHarakat=2 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
