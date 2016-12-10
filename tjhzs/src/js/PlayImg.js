// window.onload = function () {
//   focusImg({
//     startIndex: 2, //起始位置
//     step: 600,  //每次移动的总步长(也就是每张图片的宽度)
//     time: 3000, //每张图片展示时长
//     activeClass: 'on', //激活时的样式名
//     fatherbox: '#container', //父容器名字
//     imgbox: '.img-box',
//     prev: '.left',
//     next: '.right',
//     button: '.button>li'
//     // overCall: 鼠标移入时的回调
//     // outCall: 鼠标移出时的回调
//   });
// };
// initStart 轮播动画起始位置
export default function (config) {
  // 每次移动的总步长(也就是每张图片的宽度)
  const step = config.step
  // 全局变量
  // 图片盒子的总宽度
  var WIDTH
  // 可移动的总长度
  var RANGE
  // 开始距离移动的起点
  var START
  // 当前索引
  var INDEX
  // 索引总值
  var TOTAL
  // 自动播放定时器
  var TIMER

  var container = document.querySelector(config.fatherbox)
  var ul = container.querySelector(config.imgbox)
  var list = ul.querySelectorAll('li')
  var prev = container.querySelector(config.prev)
  var next = container.querySelector(config.next)
  var buttons = config.button ? container.querySelectorAll(config.button) : false
  TOTAL = list.length - 1
  RANGE = TOTAL * step
  // 设置ul的宽度
  WIDTH = list.length * step
  ul.style.width = WIDTH + 'px'
  // 设置轮播图的起始位置
  INDEX = config.startIndex > 0 && config.startIndex <= list.length ? config.startIndex : 1
  INDEX -= 1
  // 设置button样式
  if (buttons) {
    buttons[INDEX].className = config.activeClass
  }
  START = -(INDEX) * step
  // 将起始位置设置为轮播UL的left位移
  ul.style.left = START + 'px'

  // 位移动画
  var addAnimate = function (start, target, time) {
    var delay = time || 3000 // time 过渡时间
    var _times = delay / 200 // 需要执行的次数
    var len = target - start // 位移长度
    var step = len / _times  // 步长
    function go () {
      if (target > start) {
        start += step
        if (start >= target) {
          start = target
        } else {
          setTimeout(go, 50)
        }
      } else if (target < start) {
        start += step
        if (start <= target) {
          start = target
        } else {
          setTimeout(go, 50)
        }
      }
      // console.log(start, target);
      ul.style.left = start + 'px'
    }
    go()
  }

  //  点击上下张实现位移
  var clickMove = function (step) {
    var target = START + step
    if (target < -RANGE) {
      target = 0
    }
    if (target > 0) {
      target = -RANGE
    }
    // 计算出起始位置和目标位置
    addAnimate(START, target, 1000)
    // 执行完动画函数后将起始位置重新赋值到当前位置
    // 在这里单独赋值而不是在动画函数里赋值的好处时，防止重复动画的BUG
    START = target
  }

  // 确定当前显示图片的按钮
  var activeButton = function (index) {
    buttons.forEach(function (ele, _index) {
      ele.className = ''
      if (_index === index) {
        ele.className = config.activeClass
      }
    })
  }

  // 点击状态按钮
  if (buttons) {
    buttons.forEach(function (ele, index) {
      ele.addEventListener('click', function () {
        if (index !== INDEX) {
          // 这里根据当前图片索引和点击的图片索引
          // 来确定前移动还是后移动
          var _step = INDEX - index
          // 计算出需要移动的步长
          var _range = _step * step
          // 将最新的索引赋值给全局索引
          INDEX = index
          // 执行移动
          clickMove(_range)
          // 执行样式添加
          activeButton(index)
        } else {
          return
        }
      }, false)
    })
  }
  // 控制按钮就加入事件监听
  var nextMover = function () {
    INDEX++
    if (INDEX > TOTAL) {
      INDEX = 0
    }
    buttons && activeButton(INDEX)
    clickMove(-step)
  }
  prev.addEventListener('click', function () {
    INDEX--
    if (INDEX < 0) {
      INDEX = TOTAL
    }
    buttons && activeButton(INDEX)
    clickMove(step)
  }, false)
  next.addEventListener('click', nextMover, false)

  // 自动播放功能
  var play = function () {
    TIMER = setInterval(nextMover, 3000)
  }
  play()
  // 停止自动播放
  var stop = function () { clearInterval(TIMER) }
  // 鼠标移入停止，移出播放
  container.addEventListener('mouseover', function () {
    stop()
    config.overCall && config.overCall()
  }, false)
  container.addEventListener('mouseout', function () {
    play()
    config.outCall && config.outCall()
  }, false)
}
