<?php

    class Voiture
    {
        public $couleur;
        public $poids;
        public $kilométrage;
        private $circulation;
        private $immatriculation;
        private $modèle;
        private $marque;

        public function __construct($immatriculation, $circulation, $kilométrage, $modèle, $marque, $couleur, $poids)
        {
            $this->immatriculation = $immatriculation;
            $this->circulation = $circulation;
            $this->kilométrage = $kilométrage;
            $this->modèle = $modèle;
            $this->marque = $marque;
            $this->couleur = $couleur;
            $this->poids = $poids;
        }

        public function reserved()
        {
            if ('Audi' === $this->marque) {
                return 'Cette voiture est réservée';
            }

            return 'Cette voiture est disponible';
        }

        public function weightClass()
        {
            if ('3500' > $this->poids) {
                return 'véhicule commercial';
            }

            return 'véhicule privé';
        }

        public function provenance()
        {
            if ('BE' == substr($this->immatriculation, 0, 2)) {
                return 'Cette voiture provient de Belgique';
            }
            if ('FR' == substr($this->immatriculation, 0, 2)) {
                return 'Cette voiture provient de France';
            }
            if ('DE' == substr($this->immatriculation, 0, 2)) {
                return "Cette voiture provient d'Allemagne";
            }
        }

        public function usage()
        {
            if ('100000' > $this->kilométrage) {
                return 'bas kilométrage';
            }
            if ('200000' < $this->kilométrage) {
                return 'haut kilométrage';
            }

            return 'kilométrage moyen';
        }

        public function age($currentYear)
        {
            $annéeVoitureArr = explode('-', $this->circulation);
            $annéeVoiture = end($annéeVoitureArr);

            return $currentYear - $annéeVoiture;
        }

        public function rouler()
        {
            $this->kilométrage += 100000;

            return 'La voiture avance de 100 000 km';
        }

        public function displayCar()
        {
            return '
                <tr>
                    <td>'.$this->immatriculation.'</td>
                    <td>'.$this->circulation.'</td>
                    <td>'.$this->kilométrage.'</td>
                    <td>'.$this->modèle.'</td>
                    <td>'.$this->marque.'</td>
                    <td>'.$this->couleur.'</td>
                    <td>'.$this->poids.'</td>
                </tr>
            ';
        }
    }
