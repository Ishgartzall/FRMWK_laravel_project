<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  
  <div class="container mx-auto px-4 py-8">
    <h3 class="text-3xl font-bold text-center mb-6">Here is my CV to learn more about me:</h3>
    
    <!-- PDF.js viewer -->
    <canvas id="pdf-render" class="mx-auto border shadow"></canvas>
  </div>

  <!-- Include PDF.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
  
  <!-- Custom JavaScript to render the single-page PDF -->
  <script>
    const url = "{{ asset('files/CV - Victor Lequeux - English version.pdf') }}";

    const scale = 1.5,
          canvas = document.getElementById('pdf-render'),
          ctx = canvas.getContext('2d');

    // Render the PDF
    pdfjsLib.getDocument(url).promise.then(pdfDoc => {
      pdfDoc.getPage(1).then(page => {
        const viewport = page.getViewport({ scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderCtx = {
          canvasContext: ctx,
          viewport
        };

        page.render(renderCtx);
      });
    });
  </script>
</x-layout>
