public function getSlides()
    {
        $slides = Mage::getModel('learning_slider/slide')
            ->getCollection()
            ->addIsActiveFilter()
            ->addOrderByPosition();

        return $slides;
    }