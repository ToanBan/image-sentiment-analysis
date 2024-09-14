
@include('layouts.app');
<h1>Image Sentiment Analysis Result</h1>
    <p>Emotion: {{ $predictedEmotion }}</p>
    <a href="/">Upload Another Image</a>

@include('layouts.footer');