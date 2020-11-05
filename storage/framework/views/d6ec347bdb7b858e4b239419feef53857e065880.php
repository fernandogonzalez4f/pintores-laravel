
<?php $__env->startSection('title', 'Pintores'); ?>
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<marquee><h2 class="title2">Hola, Esta es una página sobre pintores, aqui te mostraremos los 5 mejores pintores</h2></marquee>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
<a class="navbar-brand" href="#"><h3>Pintores</h3></a>
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo e(route('VincentVanGogh')); ?>"><h2>Vincent Van Gogh</h2></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('RembrandtVanRijn')); ?>"><h2>Rembrandt Van Rijn</h2></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('LeonardoDaVinci')); ?>"><h2>Leonardo Da Vinci</h2></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('ClaudeMonet')); ?>"><h2>Claude Monet</h2></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('PaulCezanne')); ?>"><h2>Paul Cezanne</h2></a>
    </li>
  </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<article class="background2">
  <h1>Pintores</h1>
  <article class="color">
  <a href="<?php echo e(route('VincentVanGogh')); ?>"><h2>Vincent Van Gogh</h2></a>
    <p>Van Gogh nació en 1853 y creció en Holanda. Fue criado en una familia religiosa con su padre siendo un ministro. Cuando terminó sus estudios, Vincent siguió la profesión de su tío y se convirtió en un comerciante de arte aprendiendo el comercio en Holanda.</p>
    <center><img src="/images/vincent_van_gogh.jpg" alt="Vincent Van Gogh" width=200></center>
  </article>
  <article class="color">
  <a href="<?php echo e(route('RembrandtVanRijn')); ?>"><h2>Rembrandt Van Rijn</h2></a>
    <p>Nacido en el seno de una acomodada familia de molineros, Rembrandt van Rijn recibió una esmerada educación y llegó a ingresar en la Universidad de Leiden, donde estudió un curso, ya que por entonces decidió dedicarse a la pintura. De los dos maestros que tuvo, uno en Leiden y otro en Amsterdam, fue este último el que más influyó en el artista y el que le transmitió las tendencias italianizantes en boga.</p>
    <center><img src="/images/rembrandt_van_rijn.jpg" alt="Rembrandt Van Rijn" width=200></center>
  </article>
  <article class="color">
  <a href="<?php echo e(route('LeonardoDaVinci')); ?>"><h2>Leonardo Da Vinci</h2></a>
    <p>Leonardo nació en 1452 en la villa toscana de Vinci, hijo natural de una campesina, Caterina (que se casó poco después con un artesano de la región), y de Ser Piero, un rico notario florentino. Italia era entonces un mosaico de ciudades-estado como Florencia, pequeñas repúblicas como Venecia y feudos bajo el poder de los príncipes o el papa.</p>
    <center><img src="/images/leonardo_da_vinci.jpg" alt="Leonardo Da Vinci" width=200></center>
  </article>
  <article class="color">
  <a href="<?php echo e(route('ClaudeMonet')); ?>"><h2>Claude Monet</h2></a>
      <p>Claude Monet (1840-1926) es el verdadero promotor del Impresionismo, al que siempre se mantuvo fiel. Nació en 1840 en París, pero la mayor parte de su infancia y adolescencia transcurrió en Le Havre. Su vocación artística comenzó cultivando la caricatura, a los quince años ya gozaba de cierta reputación como caricaturista, realizando numerosas caricaturas de los habitantes de Le Havre. De la mano de Boudin se inició a la pintura al aire libre, representando marinas y escenas de playa.</p>
      <center><img src="/images/claude_monet.jpg" alt="Claude Monet" width=200></center>
  </article>
  <article class="color">
  <a href="<?php echo e(route('PaulCezanne')); ?>"><h2>Paul Cezanne</h2></a>
      <p>Paul Cézanne nació el 19 de enero de 1839 en Aix-en-Provence, sur de Francia. Hijo de Anne-Elisabeth Honorine Aubert y de Louis-Auguste Cézanne, un banquero acaudalado, conoció en su infancia Émile Zola. Prosiguió en la escuela de dibujo y posteriormente se matriculó, por influencia paterna, en la facultad de derecho, aunque pronto comprendió que su verdadera vocación era la pintura.</p>
      <center><img src="/images/paul_cezanne.jpg" alt="Paul Cezanne" width=200></center>
  </article>
</article>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=200></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
     <center><h3>Copyright Fernando Gonzalez Gallegos 5°F</h3></center> ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Pintores\resources\views/plantilla.blade.php ENDPATH**/ ?>