<nav aria-label="Page navigation" class="fullwidth">
    <ul class="pagination">
        <?php
        $this->Paginator->templates([
            'first' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'last' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'ellipsis' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">...</a></li>'
        ]);

        $this->Paginator->templates([
            'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);

        $this->Paginator->templates([
            'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);
		echo $this->Paginator->first('<<  First');
        echo $this->Paginator->prev('<  Prev');
        echo $this->Paginator->numbers(['last' => 1]);
        echo $this->Paginator->next('Next  >');
        echo $this->Paginator->last('Last  >>');
	?>
    </ul>
</nav>
<?php //echo $this->Paginator->counter('Page {{page}} of {{pages}}'); ?>
