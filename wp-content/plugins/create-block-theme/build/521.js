"use strict";(self.webpackChunkcreate_block_theme=self.webpackChunkcreate_block_theme||[]).push([[521],{4521:(t,s,i)=>{i.r(s),i.d(s,{VDMX:()=>e});var n=i(2592);class e extends n.x{constructor(t,s){const{p:i}=super(t,s);this.version=i.uint16,this.numRecs=i.uint16,this.numRatios=i.uint16,this.ratRanges=[...new Array(this.numRatios)].map((t=>new r(i))),this.offsets=[...new Array(this.numRatios)].map((t=>i.Offset16)),this.VDMXGroups=[...new Array(this.numRecs)].map((t=>new a(i)))}}class r{constructor(t){this.bCharSet=t.uint8,this.xRatio=t.uint8,this.yStartRatio=t.uint8,this.yEndRatio=t.uint8}}class a{constructor(t){this.recs=t.uint16,this.startsz=t.uint8,this.endsz=t.uint8,this.records=[...new Array(this.recs)].map((s=>new h(t)))}}class h{constructor(t){this.yPelHeight=t.uint16,this.yMax=t.int16,this.yMin=t.int16}}}}]);