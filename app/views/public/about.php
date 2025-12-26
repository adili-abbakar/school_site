<?php
$title = "About";
include __DIR__  . '/../layouts/head.php';
?>


<body class="min-h-screen flex flex-col bg-white">
  <!-- Navigation -->
  <?php include __DIR__ . '/./components/nav.php'; ?>




  <header class="bg-navy-900 text-white py-12 mb-10">
    <div class="container mx-auto px-4 text-center" data-aos="fade-up">
      <h1 class="text-3xl font-extrabold mb-3 tracking-tight">About EduPro Academy</h1>
      <p class="text-gray-300 max-w-xl mx-auto text-sm">Excellence in Education since 1995/p>
    </div>
  </header>
  <section class="py-16 container mx-auto px-4">
    <div class="max-w-4xl mx-auto space-y-16">
      <div class="grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
          <h2 class="font-bold text-primary mb-4">Our Mission</h2>
          <p class="text-gray-500 leading-relaxed text-sm">
            To provide a nurturing environment that fosters intellectual curiosity, critical thinking, and character development, preparing students to lead and excel in a global society.
          </p>
        </div>
        <div class="rounded-xl overflow-hidden shadow-xl h-64" data-aos="fade-left">
          <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&h=600&fit=crop" alt="Mission" class="w-full h-full object-cover">
        </div>
      </div>
      <div class="grid md:grid-cols-2 gap-10 items-center">
        <div class="order-2 md:order-1 rounded-xl overflow-hidden shadow-xl h-64" data-aos="fade-right">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&fit=crop" alt="Vision" class="w-full h-full object-cover">
        </div>
        <div class="order-1 md:order-2" data-aos="fade-left">
          <h2 class="font-bold text-primary mb-4">Our Vision</h2>
          <p class="text-gray-500 leading-relaxed text-sm">
            To be a premier educational institution recognized for innovation, academic excellence, and the success of our diverse student body.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/./components/footer.php'; ?>
</body>

</html>