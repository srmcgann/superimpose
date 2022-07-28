<!DOCTYPE html>
<html><head>
    <title>jpg transparency</title>
    <link rel="icon" href="https://jsbot.cantelope.org/uploads/POSOl.jpg" type="image/png">
    <style>
      body,html{
  background: linear-gradient(46deg,#201, #000, #102);
  margin: 0;
  height: 100vh;
  font-family: courier;
}
#c{
  width: 100%;
  height: 100%;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
      .homeLink{
        z-index: 10000;
        position: fixed;
        background: #2466;
        cursor: pointer;
        font-size: 12px;
        color: #fff8;
        top: 5px;
        right: 5px;
        border-radius: 3px;
        border: 1px solid #4688;
      }
      .homeLink:focus{
        outline: none;
      }
    </style>
  </head>
  <body>
    <canvas id="c" width="1920" height="1079" style="width: 100vw; height: 480.375px;">    <script>
      let sendData = {demoID: 600332}
      let url = 'https://code.dweet.net/incrementViews.php'
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(sendData),
      })
    </script>
    <script>    c=document.querySelector('#c')
    x=c.getContext('2d')
    S=Math.sin
    C=Math.cos
    Rn=Math.random
    t=go=0
      rsz=window.onresize=()=>{
        setTimeout(()=>{
          if(document.body.clientWidth > document.body.clientHeight*1.77777778){
            c.style.height = '100vh'
            setTimeout(()=>c.style.width = c.clientHeight*1.77777778+'px',0)
          }else{
            c.style.width = '100vw'
            setTimeout(()=>c.style.height = c.clientWidth/1.77777778 + 'px',0)
          }
          c.width=1920
          c.height=c.width/1.777777778
        },0)
      }
      rsz()

    Draw=()=>{
      if(!t){
        R=(Rl,Pt,Yw,m)=>{X=S(p=(A=(M=Math).atan2)(X,Y)+Rl)*(d=(H=M.hypot)(X,Y)),Y=C(p)*d,Y=S(p=A(Y,Z)+Pt)*(d=H(Y,Z)),Z=C(p)*d,X=S(p=A(X,Z)+Yw)*(d=H(X,Z)),Z=C(p)*d;if(m)X+=oX,Y+=oY,Z+=oZ}
        Q=()=>[c.width/2+X/Z*900,c.height/2+Y/Z*900]
        for(CB=[],j=6;j--;)for(i=4;i--;)CB=[...CB,[(a=[S(p=Math.PI*2/4*i+Math.PI/4),C(p),2**.5/2])[j%3]*(l=j<3?-1:1),a[(j+1)%3]*l,a[(j+2)%3]*l]]
        jpg=new Image()
        go=false
        jpg.onload=()=>{
          buffer = document.createElement('canvas')
          buffer.width=1920
          buffer.height=1080
          bctx = buffer.getContext('2d')
          if(Math.abs(buffer.height-jpg.height) > Math.abs(buffer.width-jpg.width)){
            w=1920
            h=1080*(.1+buffer.width/buffer.height)
          } else {
            w=1920*(.1+buffer.height/buffer.width)
            h=1080
          }
          bctx.fillStyle='#0f0'
          bctx.fillRect(0,0,1920,1080)
          bctx.drawImage(jpg,960-w/2,540-h/2,w,h)
          data = bctx.getImageData(0,0,buffer.width,buffer.height)
          l=data.data
          for(i=0;i<l.length;i+=4){
            red   = l[i+0]
            green = l[i+1]
            blue  = l[i+2]
            alpha = l[i+3]

            //red=256-red
            //green=256-green
            //blue=256-blue
            greenTolerance=100
            alpha=green>255-greenTolerance && red<greenTolerance && blue<greenTolerance?0:255

            l[i+0] = red
            l[i+1] = green
            l[i+2] = blue
            l[i+3] = alpha
          }
          bctx.putImageData(data,0,0)
          go=true
        }
        s=window.location.href.split('?jpg=')[1]
        if(s.length)jpg.src='/proxy.php?url='+s

        for(a=[1,1],i=40;i--;)a=[...a,a[l=a.length-1]+a[l-1]]
        phi = a[l+1]/a[l]

        rects=Array(3).fill().map((v,i)=>{
          a=[]
          a=[...a, [-phi/2, -.5, 0]]
          a=[...a, [phi/2,  -.5, 0]]
          a=[...a, [phi/2,  .5,  0]]
          a=[...a, [-phi/2, .5,  0]]
          a=a.map(q=>{
            X=q[0], Y=q[1], Z=q[2]
            switch(i){
              case 0: R(Math.PI/2,0,0); break
              case 1: R(Math.PI/2,Math.PI/2,Math.PI/2); break
              case 2: R(0,0,Math.PI/2); break
            }
            return [X,Y,Z]
          })
          return a
        })
        facets=[[[0,0], [2,2], [0,3]],[[1,2], [2,2], [0,3]],[[1,2], [2,2], [2,1]],[[1,2], [0,2], [2,1]],[[2,1], [0,1], [1,3]],[[2,1], [2,2], [1,3]],[[2,1], [0,1], [0,2]],[[1,2], [1,1], [0,2]],[[0,2], [0,1], [2,0]],[[0,2], [2,0], [1,1]],[[2,3], [2,0], [1,1]],[[2,3], [2,0], [1,0]],[[0,1], [2,0], [1,0]],[[0,1], [1,3], [1,0]],[[0,0], [1,3], [1,0]],[[0,0], [2,3], [1,0]],[[0,0], [2,3], [0,3]],[[1,1], [2,3], [0,3]],[[1,1], [1,2], [0,3]],[[0,0], [2,2], [1,3]]]

        shp=[]
        facets.map(n=>{
          a=[]
          n.map(q=>{
            v=rects[q[0]][q[1]]
            X=v[0]
            Y=v[1]
            Z=v[2]
            a=[...a, [X,Y,Z]]
          })
          shp=[...shp, a]
        })

        subdivide = () =>{
          subdivisions=[]
          new_shp=[]
          shp.map((v,i,a)=>{
            a=[]
            v.map((q,j)=>{
              X1=q[0]
              Y1=q[1]
              Z1=q[2]
              X2=v[l=(j+1)%3][0]
              Y2=v[l][1]
              Z2=v[l][2]
              mx=(X1+X2)/2
              my=(Y1+Y2)/2
              mz=(Z1+Z2)/2
              a=[...a, [mx,my,mz]]
            })
            subdivisions=[...subdivisions, a]
            v.map((q,j)=>{
              b=[]
              for(m=1;m--;){
                b=[...b, [...v[(j+1)%3]], [...a[(m+j)%3]], [...a[(m+j+1)%3]]]
              }
              subdivisions=[...subdivisions, b]
            })
          })
          shp=[...new_shp, ...subdivisions]      
      }


        subdivisions=3
        for(let m = subdivisions; m--;)subdivide()
        base_shp=JSON.parse(JSON.stringify(shp))

        expansion=10+10*S(t*2)
        ls=.1/(20+expansion)*270
        shps=[]
        shps=[...shps, ((base_shp.map(v=>{
          v=v.map(q=>{
            X1=q[0]
            Y1=q[1]
            Z1=q[2]
            d=Math.hypot(X1,Y1,Z1)
            X2=X1/d
            Y2=Y1/d
            Z2=Z1/d
            X=(X2*expansion+(X1*(1-expansion)))*ls
            Y=(Y2*expansion+(Y1*(1-expansion)))*ls
            Z=(Z2*expansion+(Z1*(1-expansion)))*ls
            return [X,Y,Z]
          })
          return v
        })))]
        expansion=S(t*4)*1-2
        ls=1.5
        shps=[...shps, ((base_shp.map(v=>{
          v=v.map(q=>{
            X1=q[0]
            Y1=q[1]
            Z1=q[2]
            d=Math.hypot(X1,Y1,Z1)
            X2=X1/d
            Y2=Y1/d
            Z2=Z1/d
            X=(X2*expansion+(X1*(1-expansion)))*ls
            Y=(Y2*expansion+(Y1*(1-expansion)))*ls
            Z=(Z2*expansion+(Z1*(1-expansion)))*ls
            return [X,Y,Z]
          })
          return v
        })))]

      }

      x.lineJoin=x.lineCap='butt'
      Rl=0,Pt=-4,Yw=t
      oX=0,oY=0,oZ=3.5

      x.globalAlpha=1
      x.fillStyle='#0008'
      x.fillRect(0,0,c.width,c.height)

      shps.map(shp=>{
       shp.map(n=>{
          x.beginPath()
          ax=ay=az=0
          n.map(q=>{
            v=q
            X=v[0]
            Y=v[1]
            Z=v[2]
            ax+=X
            ay+=Y
            az+=Z
            R(Rl,Pt,Yw,1)
            x.lineTo(...Q())
          })
          ax/=n.length
          ay/=n.length
          az/=n.length
          x.closePath()
          x.lineWidth=70/(Z**1.5)
          x.strokeStyle=`hsla(${(l=H(ax,ay,az)*200)*1-t*200},99%,${100-l**3.5/80000000}%,.2)`
          x.stroke()
          x.lineWidth/=5
          x.lineWidth|=0
          x.strokeStyle='#fff3'
          //x.stroke()
          //x.fillStyle=`hsla(${(l=H(ax,ay,az)*200)*2-t*200},99%,${100-l**3.5/100000000}%,.1)`
          //x.fill()
        })
      })
      x.globalAlpha=1
      if(go) x.drawImage(buffer,0,0,c.width,c.height)      

      t+=1/60
      requestAnimationFrame(Draw)
    }
    Draw()</script>
  

</canvas></body></html>
