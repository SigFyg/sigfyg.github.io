---
layout: page
permalink: /teaching/
title: Teaching
description: 
nav: true
nav_order: 4
---

Here is a collection of educational materials I've made. Hope you find something useful here!

<h2 style="margin-top: 2rem;">Lecture Notes</h2>

I enjoy coming up with my own derivations that can add insight to fundamental topics. The following are handwritten lecture notes walking through these derivations based on what I happened to be curious about at the time.

{% for group in site.data.notes %}
<h3>{{ group.course }}</h3>
<ul>
  {% for n in group.notes %}
  <li><a href="{{ n.file | relative_url }}" target="_blank">{{ n.title }}</a></li>
  {% endfor %}
</ul>
{% endfor %}

<h2 style="margin-top: 2rem;">Videos</h2>

Here's my <a href="https://www.youtube.com/@sigfyg8384" target="_blank">YouTube channel</a> where I cover various topics in engineering and research. Below are two featured videos:

<div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1rem;">
  <div style="flex: 1 1 320px;">
    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
      <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        src="https://www.youtube.com/embed/aEGboJxmq-w"
        title="YouTube video" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>
  <div style="flex: 1 1 320px;">
    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
      <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        src="https://www.youtube.com/embed/2VrnkXd9QR8"
        title="YouTube video" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>
</div>