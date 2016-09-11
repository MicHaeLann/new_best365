<?php

/*
 * This file is part of the ControllerExtraBundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\ControllerExtraBundle\Tests\Functional\Resolver;

use Mmoreram\ControllerExtraBundle\Tests\Functional\AbstractWebTestCase;

/**
 * Class PostAnnotationResolverTest
 */
class PostAnnotationResolverTest extends AbstractWebTestCase
{
    /**
     * Test obtain a $_POST parameter
     */
    public function testObtainPostParameterAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameter',
            array('param' => 'test')
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            'test',
            $response['param'],
            'The post parameter is not being correctly resolved'
        );
    }

    /**
     * Test obtain non existent $_POST parameter
     */
    public function testObtainNonExistentPostParameterAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameter'
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            null,
            $response['param'],
            'The resolved param is supposed to be null if no param is received'
        );
    }

    /**
     * Test obtain a $_POST parameter changing the param name
     */
    public function testObtainPostParameterChangingParamNameAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterchangingparamname',
            array('param' => 'test')
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            'test',
            $response['param'],
            'The post parameter is not being correctly resolved'
        );
    }

    /**
     * Test obtain a $_POST parameter changing the param name
     */
    public function testObtainNonExistentPostParameterChangingParamNameAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterchangingparamname'
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            null,
            $response['param'],
            'The resolved param is supposed to be null if no param is received'
        );
    }

    /**
     * Test obtain a $_POST parameter changing the default value
     */
    public function testObtainPostParameterChangingDefaultAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterchangingdefaultvalue',
            array('param' => 'value')
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            'value',
            $response['param'],
            'The post parameter is not being correctly resolved'
        );
    }

    /**
     * Test obtain an unexistent $_POST parameter changing the default value
     */
    public function testObtainNonExistentPostParameterChangingDefaultAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterchangingdefaultvalue'
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            'default-value',
            $response['param'],
            'The resolved param is supposed to be the default value if no param is received'
        );
    }

    /**
     * Test obtain a $_POST parameter using deep mode
     */
    public function testObtainPostParameterDeepAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterdeep',
            array(
                'param' => array(
                    'key' => 'value',
                ),
            )
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            'value',
            $response['param'],
            'The post parameter is not being correctly resolved'
        );
    }

    /**
     * Test obtain an unexistent $_POST parameter using deep mode
     */
    public function testObtainUnexistentPostParameterDeepAnnotation()
    {
        $this->client->request(
            'POST',
            '/fake/getpostparameterdeep'
        );

        $response = json_decode($this
            ->client
            ->getResponse()
            ->getContent(), true);

        $this->assertEquals(
            null,
            $response['param'],
            'The resolved param is supposed to be null if no param is received'
        );
    }
}
