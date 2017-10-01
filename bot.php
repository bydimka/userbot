<?php

if ($msg == ".spam") {
  while(1) {
     sm(@StrangerBot, "/start");
     sleep(2);
     sm(@StrangerBot, ""); //Inserisci il messaggio da spammare
     sleep(2);
     sm(@StrangerBot, "/end");
     sleep(2);
  }
}
