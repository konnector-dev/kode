<div class="flex flex-col w-0 flex-1 overflow-hidden"
     :class="{'bg-gray-900': isDark, 'bg-gray-400': !isDark}">
    <main-top></main-top>
    <main-dashboard></main-dashboard>
    <?php
//    echo $this->element('main/top');
//    echo $this->element('main/dashboard');
    ?>
</div>
