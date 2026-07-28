---
layout: page
permalink: /qanda/
title: Research Q&A
description: 
nav: true
nav_order: 2
---

<h3 style="margin-top: 2rem;">Why Study Movement?</h3>

Memorizing a list of 100 numbers is trivial for a computer, yet difficult for most humans. However, actions such as tying shoelaces or walking upright are trivial to us, yet pose a significant challenge for robots. This mismatch is a movement-focused variant of Moravec's Paradox, and I have yet to come across a satisfactory explanation for it, nor should we expect one for a long time. When considering what we do not understand about movement, two kinds of tensions arise that are difficult to resolve and explain. The first is natural vs artificial systems, and the second is algorithmic vs differential equation models of reality. Investigating these points of tension will enhance our fundamental understanding of movement and cognition.

{% include figure.liquid loading="eager" path="assets/img/compute_diagram.png" class="img-fluid rounded z-depth-1" zoomable=true title="The two tensions in studying movement" %}

These tensions, which have been discussed in Complexity Science and commentary on Marr's Levels of Analysis, also appeared in my research experience. Computer architecture sits at an odd part of the computer engineering stack. The models are symbolic, but the goal is to obtain results with physical meaning (e.g. saving power and time). Control theory is also odd; when a microprocessor is controlling a robot, we have a symbolic system controlling an analogue, differential equation system. I plan on using stochastic control theory to begin connecting these domains of knowledge, since stochastic control is where probability meets dynamical systems, and probability is a bridge to symbolic descriptions via information theory.

<h3 style="margin-top: 2rem;">What is a Computer?</h3>

<h3>What is a Computer?</h3>

The following three scenarios illustrate perspectives on computation I find interesting and important, especially when considering what it means to observe computation naturally and physically.

**Scenario #1:** Let's say someone asks me "What is $$\cos(0.85)$$?". Instead of using a calculator, I find a Trigonometry Look-Up Table in the form of a physical book and flip to the page with the correct answer. Have I done a "computation"? Consider how some signal processing chips actually use Look-Up Tables to compute trigonometry functions. Also consider how the constant speculation occurring in your CPU (e.g. caching, branch prediction, prefetching) is a softer version of using Look-Up Tables, all for the purpose of speeding up computation. Searching through the table is a computation, which relies on a past computation filling out the table's entries to save the effort of recomputing those entries in the future. More broadly, encoding patterns ahead of time, whether in software or hardware, can shrink time, space, or energy resources required for computation. All domain-specific accelerators are designed off of this principle.

**Scenario #2:** Imagine I flip a coin 100 times, and the coin comes up heads all 100 times. This is either an extraordinary coincidence, or there is some "computation" (e.g. the coin is weighted) behind the process. But in order for this event to be extraordinary at all, we must first interpret the process through a framework where "heads" and "tails" are meaningful symbols, despite "heads/tails" not being fundamental SI units of the universe. If the coin was blank on both sides, the flipping process loses its meaning. Thus, a model of computation is only as sophisticated as its interpreters, or the agents that respond to it. Computation emerges as an interaction between agents, observers, and environments.

**Scenario #3:** When you see a ball rolling down a hill, you probably wouldn't think of that ball as a computer or a robot. But what actually distinguishes it from a computer? [Fish don't need to be alive to swim efficiently](https://fyfluiddynamics.com/2018/07/when-i-was-a-child-my-father-would-take-me-trout/). [Strandbeests](https://www.youtube.com/watch?v=C97kMKwZ2-g) do not need any electronics to walk. They passively follow the laws of physics as does the ball on the hill. In other words, computation is being offloaded into morphology. This is an instance of Scenario #1, where some "knowledge" of movement is in the body itself. Furthermore, these movements are dependent on the environment. The notion of "rolling" for the ball requires contact between the ball and a sloped surface. The notion of "walking" also requires a surface to stand on. Thus, computation emerges from interactions between neural substrates, morphology, and environment.

<h3 style="margin-top: 2rem;">What Can Engineers Learn From Biology?</h3>
I speak from experiences in neuromorphic computing and robotics, so this discussion is motivated by a comparison between robots and organisms. The key difference I see is that the products of engineering have an obligation to be understood by humans, while biology has no such requirement. Put differently, engineered systems are designed to be debugged, biological systems are not. To illustrate, roboticists should be able to write algorithms without understanding the details of operating systems, and a cache protocol should be designed without understanding a transistor's timing tolerances. As a result, engineered systems are highly modular and compressible into block diagrams, whereas biological systems are fully connected causality graphs. 

The key takeaway is this: We may observe complex, agile, efficient, and intelligent systems in biology, but we shouldn't immediately conclude that these systems are existence proofs for engineered counterparts. One must first find where the engineering and biological epistemologies overlap, with the awareness that biological systems exist outside the modular knowledge framework of engineering.